<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Penduduk;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'galleries' => Gallery::limit(4)->orderBy('created_at', 'DESC')->get(),
            'articles' => Article::with('category')->orderBy('created_at', 'DESC')->limit(4)->get(),
            'jml_penduduk' => Penduduk::get()->count()
        ];
        return view('index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('contact', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami',
            'jml_penduduk' => Penduduk::get()->count(),
            'jml_article' => Article::get()->count()
        ];
        return view('about', $data);
    }
    public function article()
    {
        $data = [
            'title' => 'Artikel',
            'articles' => Article::with('category')->where('article_number', 1)->orderBy('created_at', 'DESC')->get()
        ];
        return view('article', $data);
    }

    public function article2()
    {
        $data = [
            'title' => 'Artikel',
            'articles' => Article::with('category')->where('article_number', 2)->orderBy('created_at', 'DESC')->get()
        ];
        return view('article2', $data);
    }
    public function article_single($slug)
    {
        $data = [
            'title' => 'Artikel single',
            'articles' => Article::where('slug', $slug)->with('category')->first()
        ];
        return view('single', $data);
    }

    public function gallery_single($slug)
    {
        $data = [
            'title' => 'Artikel single',
            'gallery' => Gallery::where('slug', $slug)->first()
        ];
        return view('gallery_single', $data);
    }
    public function galleries()
    {
        $data = [
            'title' => 'Galeri',
            'galleries' => Gallery::orderBy('created_at', 'DESC')->get()
        ];
        return view('galleries', $data);
    }
}
