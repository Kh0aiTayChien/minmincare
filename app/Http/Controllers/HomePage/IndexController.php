<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Mail\InfoUserMailable;
use App\Mail\RegisterMailable;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Revolution\Google\Sheets\Facades\Sheets;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categoryImgSlug = "anh-slide-pc-01";
        $images = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        SEOMeta::setTitle('MinMinCare');
        SEOMeta::setDescription('Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.');
        SEOMeta::setCanonical('https://minmincare.com.vn/');

        OpenGraph::setDescription('Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.');
        OpenGraph::setTitle('MinMinCare');
        OpenGraph::setUrl('https://minmincare.com.vn/');
        OpenGraph::addProperty('type', 'homepage');
        OpenGraph::addImage(url($images[0]->image_url));

        TwitterCard::setTitle('MinMinCare');
        TwitterCard::setSite('');

        JsonLd::setTitle('MinMinCare');
        JsonLd::setDescription('Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.');
        JsonLd::addImage(url($images[0]->image_url));


        $products = Product::orderBy('order_number', 'asc')->get();


        $categoryImgSlugMobile = "anh-slide-mobile-01";
        $imageMobiles = Image::whereHas('category', function ($query) use ($categoryImgSlugMobile) {
            $query->where('slug', $categoryImgSlugMobile);
        })->get();

        $news = Article::whereHas('category', function ($query) {
            $query->where('title', 'tin tức');
        })
            ->where('status', 1)
            ->take(6)
            ->get();
        $category1NewSlug = 'kien-thuc-me-bau';
        $category2NewSlug = 'kien-thuc-me-sau-sinh';
        $category3NewSlug = 'kien-thuc-dinh-duong-cho-con';
        $new1 = Article::whereHas('category', function ($query) use ($category1NewSlug) {
            $query->where('slug', $category1NewSlug);
        })->take(3)->get();
        $new2 = Article::whereHas('category', function ($query) use ($category2NewSlug) {
            $query->where('slug', $category2NewSlug);
        })->take(3)->get();
        $new3 = Article::whereHas('category', function ($query) use ($category3NewSlug) {
            $query->where('slug', $category3NewSlug);
        })->take(3)->get();

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages/home-page/index', ['news' => $news, 'images' => $images,
                    'imageMobiles' => $imageMobiles, 'products' => $products,
                    'new1' => $new1, 'new2' => $new2, 'new3' => $new3])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages/home-page/index', ['news' => $news, 'carts' => $carts, 'images' => $images,
                'imageMobiles' => $imageMobiles, 'products' => $products,
                'new1' => $new1, 'new2' => $new2, 'new3' => $new3]);
        }
    }

    public function send(Request $request)
    {
        $viewData = [
            'status' => 'register_send',
        ];
        $name = $request->name;
        $phone = $request->phone;
        $question = $request->question;
        Mail::to('nguyenthunga221291@gmail.com')->send(new RegisterMailable($name, $phone, $question));
        return response()->json($viewData);
    }
}
