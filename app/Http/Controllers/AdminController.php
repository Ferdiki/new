<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Penduduk;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'jml_penduduk' => Penduduk::get()->count()
        ];
        return view('admin.dashboard', $data);
    }
    public function getGallery()
    {
        $data = [
            'title' => 'list Gallery',
            'galleries' => Gallery::get()
        ];
        return view('admin.gallery.index', $data);
    }
    public function createGallery()
    {
        $data = [
            'title' => 'create Gallery'
        ];
        return view('admin.gallery.create', $data);
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,png,bmp,jpeg,webp',

        ]);
        $file = $request->file('gambar');
        $slug = SlugService::createSlug(Gallery::class, 'slug', $request->title);
        if (!$file) {
            $namafile = "default";
        } else {
            if (!Storage::exists('/public/galleries')) {
                Storage::makeDirectory('public/galleries', 0775, true);
            }
            $namafile = $file->hashName();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/galleries/' . $namafile));
        }
        $save = Gallery::create([
            'title' => $request->title,
            'slug' => $slug,
            'penulis' => $request->penulis,
            'body' => $request->isi,
            'gambar' => $namafile
        ]);
        if ($save) {
            return redirect()->route('articles.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('articles.index')->with('failed', 'Data gagal ditambahkan');

        }

    }

    public function deleteGallery(Gallery $gallery)
    {
        $delete = $gallery->delete();
        if ($delete) {
            Storage::delete('public/galleries/' . $gallery->gallery);
            return redirect()->route('galleries.index')->with('success', 'Data Berhasil dihapus');
        } else {
            return redirect()->route('galleries.index')->with('failed', 'Data Gagal dihapus');
        }
    }
}