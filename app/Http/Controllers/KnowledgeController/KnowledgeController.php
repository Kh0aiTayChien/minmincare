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

class KnowledgeController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = 'kien-thuc-me-bau';
        $knowledges = Article::where('status',1)
            ->whereHas('category', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->paginate(5);

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.kien-thuc.index', ['articles' => $knowledges])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages.kien-thuc.index', ['articles' => $knowledges, 'carts' => $carts]);
        }
    }
    public function show(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $sessionCookie = config('session.cookie');

        SEOMeta::setTitle('MinMinCare Kiến Thức Mẹ Bầu -'.$slug);
        SEOMeta::setDescription('MinMinCare Kiến Thức Mẹ Bầu |'.$article->name);

        OpenGraph::setDescription('MinMinCare Kiến Thức Mẹ Bầu  |'.$article->name);
        OpenGraph::setTitle('MinMinCare Kiến Thức Mẹ Bầu-'.$slug);
        OpenGraph::setUrl('https://minmincare.com.vn/kien-thuc/'.$slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('https://minmincare.com.vn/'.$article->image);

        TwitterCard::setTitle('MinMinCare Kiến Thức Mẹ Bầu-'.$slug);
        TwitterCard::setSite('');

        JsonLd::setTitle('MinMinCare Kiến Thức Mẹ Bầu -'.$slug);
        JsonLd::setDescription('MinMinCare Kiến Thức Mẹ Bầu |'.$article->name);
        JsonLd::addImage('https://minmincare.com.vn/'.$article->image);

        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.kien-thuc.show.index')->with('article', $article)
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages.kien-thuc.show.index', ['article' => $article, 'carts' => $carts]);
        }
    }
}
