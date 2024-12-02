<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Article;

class BeasiswaController extends Controller
{
    public function index()
    {
        $news = News::latest()->get(); // Mengambil berita terbaru
        $articles = Article::latest()->get(); // Mengambil artikel terbaru

        return view('beasiswa.index', compact('news', 'articles'));
    }
}
