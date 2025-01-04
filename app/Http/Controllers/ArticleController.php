<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource with pagination.
     */
    public function index()
    {
        $data = [
            'title' => 'Article list',
            // Menggunakan pagination untuk memuat data secara efisien
            'articles' => Article::with('category')->where('article_number', 1)->paginate(10)
        ];
        return view('admin.articles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Article create',
            'categories' => Category::get()
        ];
        return view('admin.articles.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,png,bmp,jpeg,webp|max:5000', // Batasi ukuran file gambar
            'category_id' => 'required'
        ]);

        $file = $request->file('gambar');
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);

        // Menyimpan gambar jika ada
        if ($file) {
            if (!Storage::exists('/public/articles')) {
                Storage::makeDirectory('public/articles', 0775, true);
            }
            $namafile = $file->hashName();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/articles/' . $namafile));
        } else {
            $namafile = "default"; // Gunakan default jika tidak ada gambar
        }

        // Menyimpan artikel baru
        Article::create([
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category_id,
            'penulis' => $request->penulis,
            'body' => $request->isi,
            'article_number' => 1,
            'gambar' => $namafile
        ]);

        return redirect()->route('articles.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $data = [
            'title' => 'Detail Berita',
            'posts' => $article->load('category'), // Optimasi dengan eager loading
            'categories' => Category::get()
        ];

        return view('admin.articles.details', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar' => 'image|mimes:jpg,png,bmp,jpeg,webp|max:5000' // Batasi ukuran file gambar
        ]);

        $file = $request->file('gambar');
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);

        // Proses gambar baru jika ada
        if ($file) {
            if (!Storage::exists('/public/articles')) {
                Storage::makeDirectory('public/articles', 0775, true);
            }

            // Menghapus gambar lama jika ada
            if ($article->gambar && Storage::exists('public/articles/' . $article->gambar)) {
                Storage::delete('public/articles/' . $article->gambar);
            }

            // Menyimpan gambar baru
            $namafile = $file->hashName();
            $img = Image::make($file->path());
            $img->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(Storage::path('public/articles/' . $namafile));
        } else {
            $namafile = $article->gambar; // Jika gambar tidak diubah, gunakan gambar lama
        }

        // Update artikel
        $article->update([
            'title' => $request->title,
            'slug' => $slug,
            'penulis' => $request->penulis,
            'category_id' => $request->category_id,
            'body' => $request->isi,
            'article_number' => 1,
            'gambar' => $namafile
        ]);

        return redirect()->route('articles.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Menghapus gambar terkait jika ada
        if ($article->gambar && Storage::exists('public/articles/' . $article->gambar)) {
            Storage::delete('public/articles/' . $article->gambar);
        }

        // Menghapus artikel
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Show the list of categories.
     */
    public function categories()
    {
        $data = [
            'title' => 'List Categories',
            'categories' => Category::get()
        ];
        return view('admin.articles.categories', $data);
    }

    /**
     * Save a new category.
     */
    public function save_category(Request $request)
    {
        $request->validate([
            'category' => 'required'
        ]);

        // Menyimpan kategori baru
        Category::create([
            'category' => $request->category
        ]);

        return redirect()->route('categories.index')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Delete the specified category.
     */
    public function delete_category(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus');
    }
}
