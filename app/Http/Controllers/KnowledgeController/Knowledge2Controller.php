<?php

namespace App\Http\Controllers\KnowledgeController;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class Knowledge2Controller extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = 'kien-thuc-me-sau-sinh';
        $knowledges = Article::where('status',1)
            ->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
        })->paginate(5);

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
    public function show(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $sessionCookie = config('session.cookie');

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('MinMinCare Kiến Thức Mẹ Sau Sinh |'.$article->title);

        OpenGraph::setDescription('MinMinCare Kiến Thức Mẹ Sau Sinh |'.$article->title);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('kien-thuc.me-sau-sinh.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(url($article->image));

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('MinMinCare Kiến Thức Mẹ Sau Sinh |'.$article->title);
        JsonLd::addImage(url($article->image));

        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.kien-thuc.me-sau-sinh.show.index',['article' => $article])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages.kien-thuc.me-sau-sinh.show.index', ['article' => $article, 'carts' => $carts]);
        }
    }
}
