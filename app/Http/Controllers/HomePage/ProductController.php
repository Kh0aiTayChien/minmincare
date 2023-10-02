<?php

namespace App\Http\Controllers\HomePage;

use App\Models\Category;
use App\Models\MediaProduct;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index1(Request $request)
    {
        $products = Product::all();
        $category1 = Category::where('slug', 'ngu-coc')->firstOrFail();
        $cereals = $category1->products;


        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/san-pham/index',
                    ['products' => $products, 'cereals' => $cereals,
                         ])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/san-pham/index',
                ['products' => $products, 'carts' => $carts, 'cereals' => $cereals]);
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
        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/chi-tiet-san-pham/index', ['product' => $product, 'mediaProducts' => $mediaProducts])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/chi-tiet-san-pham/index',
                ['product' => $product, 'mediaProducts' => $mediaProducts, 'carts' => $carts]);
        }
    }
}
