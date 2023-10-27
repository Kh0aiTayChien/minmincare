<?php

namespace App\Http\Controllers\News;

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

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = 'tin-tuc';
        $news = Article::where('status',1)
            ->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            })->paginate(5);

        SEOMeta::setTitle('MinMinCare Tin Tức');
        SEOMeta::setDescription('MinMinCare Tin Tức');

        OpenGraph::setDescription('MinMinCare/');
        OpenGraph::setTitle('MinMinCare/tin-tuc/');
        OpenGraph::setUrl('https://minmincare.com.vn/tin-tuc');
        OpenGraph::addProperty('type', 'article');

        TwitterCard::setTitle('MinMinCare');
        TwitterCard::setSite('');

        JsonLd::setTitle('MinMinCare');
        JsonLd::setDescription('MinMinCare Tin Tức');

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.tin-tuc.index')->with('news', $news)
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return response()->view('pages.tin-tuc.index', ['news' => $news, 'carts' => $carts]);
        }
    }

    public function show($slug, Request $request)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        SEOMeta::setTitle('MinMinCare/tin-tuc/'.$slug);
        SEOMeta::setDescription('MinMinCare/'.$slug);

        OpenGraph::setDescription('MinMinCare/'.$slug);
        OpenGraph::setTitle('MinMinCare/tin-tuc/'.$slug);
        OpenGraph::setUrl(route('homepage.index',['slug' =>$slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(route('homepage.index').$article->image);

        TwitterCard::setTitle('MinMinCare');
        TwitterCard::setSite('');

        JsonLd::setTitle('MinMinCare');
        JsonLd::setDescription('MinMinCare/'.$slug);
        JsonLd::addImage(route('homepage.index').$article->image);

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.tin-tuc.article.index')->with('article', $article)
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return response()->view('pages.tin-tuc.article.index', ['article' => $article, 'carts' => $carts]);
        }
    }
}
