<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $news = Article::whereHas('category', function ($query) {
            $query->where('title', 'tin tức');
        })->take(6)->get();

        return view('pages/home-page/index', ['news' => $news]);
    }
}
