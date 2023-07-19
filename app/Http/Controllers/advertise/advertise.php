<?php

namespace App\Http\Controllers\advertise;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class advertise extends Controller
{
    public function index(Request $request)
    {
        $news = Article::whereHas('category', function ($query) {
            $query->where('title', 'tin tức');
        })
            ->where('status', 1)
            ->take(6)
            ->get();

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.advertise.index', ['news' => $news])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages.advertise.index', ['news' => $news, 'carts' => $carts]);
        }
    }
}
