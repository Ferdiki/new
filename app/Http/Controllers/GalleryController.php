<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GalleryController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'list Gallery',
            'galleries' => Gallery::get()
        ];
        return view('admin.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'create Gallery'
        ];
        return view('admin.gallery.create', $data);
    }
    public function store(Request $request)
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
            return redirect()->route('gallery.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('gallery.index')->with('failed', 'Data gagal ditambahkan');

        }

    }
    public function show(string $id)
    {
        $data = [
            'title' => 'Detail Berita',
            'gallery' => Gallery::findOrFail($id)
        ];

        return view('admin.gallery.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar' => 'image|mimes:jpg,png,bmp,jpeg,webp|max:5000', // Batasi ukuran file gambar
        ]);

        $file = $request->file('gambar');
        $slug = SlugService::createSlug(Gallery::class, 'slug', $request->title);

        // Jika tidak ada gambar yang diunggah, gunakan gambar lama
        if (!$file) {
            $namafile = $gallery->gambar; // Jika gambar tidak diubah, gunakan gambar lama
        } else {
            // Jika ada gambar baru, simpan di direktori public/galleries
            if (!Storage::exists('/public/galleries')) {
                Storage::makeDirectory('public/galleries', 0775, true);
            }

            // Hapus gambar lama jika ada dan bukan gambar default
            if ($gallery->gambar && Storage::exists('public/galleries/' . $gallery->gambar) && $gallery->gambar !== 'default') {
                Storage::delete('public/galleries/' . $gallery->gambar);
            }

            // Simpan gambar baru
            $namafile = $file->hashName();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/galleries/' . $namafile));
        }

        // Update data gallery
        $update = $gallery->update([
            'title' => $request->title,
            'slug' => $slug,
            'penulis' => $request->penulis,
            'body' => $request->isi,
            'gambar' => $namafile
        ]);

        // Cek apakah data berhasil diupdate
        if ($update) {
            return redirect()->route('gallery.index')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->route('gallery.index')->with('failed', 'Data gagal diupdate');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
