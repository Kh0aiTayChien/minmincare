<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $articles = Article::count();
        $products = Product::count();
        $categories = Category::count();


        $widget = [
            'users' => $users,
            'articles' => $articles,
            'products' => $products,
            'categories' => $categories,
        ];

        return view('admin/home', compact('widget'));
    }
}
