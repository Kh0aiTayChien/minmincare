<?php

namespace App\Http\Controllers\KnowledgeController;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class Knowledge2Controller extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = 'kien-thuc-me-sau-sinh';
        $knowledges = Article::whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->paginate(10);

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.kien-thuc.me-sau-sinh.index',['articles' => $knowledges])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages.kien-thuc.me-sau-sinh.index', ['articles' => $knowledges, 'carts' => $carts]);
        }
    }
}
