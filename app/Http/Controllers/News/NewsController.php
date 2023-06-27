<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $news = Article::paginate(3);
        return view('pages.tin-tuc.index')->with('news', $news);
    }
}
