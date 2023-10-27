<?php

namespace App\Http\Controllers\HomePage;

use App\Models\Category;
use App\Models\MediaProduct;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index1(Request $request)
    {

        $products = Product::all();
        $category1 = Category::where('slug', 'ngu-coc-me-bau')->firstOrFail();
        $category2 = Category::where('slug', 'ngu-coc-loi-sua')->firstOrFail()->id;
        $category3 = Category::where('slug', 'sua-hat-dinh-duong')->firstOrFail()->id;
        $category4 = Category::where('slug', 'hat-granola')->firstOrFail()->id;

        $cereals = $category1->products;
        $milk_pregnant = Product::where('category_id', $category2)->get();
        $nut_milks = Product::where('category_id', $category3)->get();
        $nuts = Product::where('category_id', $category4)->get();

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages.san-pham.index',
                    ['products' => $products, 'cereals' => $cereals,
                        'milk_pregnant' => $milk_pregnant, 'nut_milks' => $nut_milks,
                        'nuts' => $nuts])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages.san-pham.index',
                ['products' => $products, 'carts' => $carts, 'cereals' => $cereals,
                    'milk_pregnant' => $milk_pregnant, 'nut_milks' => $nut_milks,
                    'nuts' => $nuts]);
        }
    }

    public function index2(Request $request)
    {
        $category2 = Category::where('slug', 'sua-hat')->firstOrFail()->id;
        $nut_milks = Product::where('category_id', $category2)->get();
        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/san-pham/index2',
                    ['nut_milks' => $nut_milks])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/san-pham/index2',
                [ 'carts' => $carts,
                    'nut_milks' => $nut_milks,]);
        }
    }

    public function index3(Request $request)
    {
        $category3 = Category::where('slug', 'hat')->firstOrFail()->id;
        $nuts = Product::where('category_id', $category3)->get();
        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/san-pham/index3',
                    [
                        'nuts' => $nuts])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/san-pham/index3',
                [ 'carts' => $carts,
                    'nuts' => $nuts]);
        }
    }

    public function show($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mediaProducts = MediaProduct::where('product_id', $product->id)->get();
        $videoUrl  = $product->video_url;
        $videoId = $this->getYouTubeVideoId($videoUrl);
        $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";

        SEOMeta::setTitle('MinMinCare/san-pham/'.$slug);
        SEOMeta::setDescription('MinMinCare/'.$slug);

        OpenGraph::setDescription('MinMinCare/'.$slug);
        OpenGraph::setTitle('MinMinCare/san-pham/'.$slug);
        OpenGraph::setUrl('https://minmincare.com.vn/san-pham/'.$slug);
        OpenGraph::addProperty('type', 'product');
        OpenGraph::addImage('https://minmincare.com.vn/'.$product->image);

        TwitterCard::setTitle('MinMinCare');
        TwitterCard::setSite('');

        JsonLd::setTitle('MinMinCare');
        JsonLd::setDescription('MinMinCare/'.$slug);
        JsonLd::addImage('https://minmincare.com.vn/'.$product->image);

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/chi-tiet-san-pham/index', ['product' => $product,
                    'mediaProducts' => $mediaProducts, 'thumbnailUrl' => $thumbnailUrl])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/chi-tiet-san-pham/index',
                ['product' => $product, 'mediaProducts' => $mediaProducts,
                    'carts' => $carts, 'thumbnailUrl' => $thumbnailUrl]);
        }
    }

    public function getYouTubeVideoId($videoUrl) {
        $parsedUrl = parse_url($videoUrl);

        // Kiểm tra xem đường dẫn có tồn tại hay không
        if (isset($parsedUrl['path'])) {
            $pathParts = explode('/', $parsedUrl['path']);
            return end($pathParts);
        }

        return null; // hoặc giá trị mặc định khác tùy vào trường hợp của bạn
    }
}
