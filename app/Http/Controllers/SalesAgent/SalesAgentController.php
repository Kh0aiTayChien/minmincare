<?php

namespace App\Http\Controllers\SalesAgent;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\Product;

class SalesAgentController extends Controller
{
    public function index(Request $request)
    {
        $categoryImgSlug = "anh-slide-pc-01";
        $images = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();

        $categoryImgSlugMobile = "anh-slide-mobile-01";
        $imageMobiles = Image::whereHas('category', function ($query) use ($categoryImgSlugMobile) {
            $query->where('slug', $categoryImgSlugMobile);
        })->get();

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            $products = Product::all();
            return response()
                ->view('pages.dai-ly.index', ['images' => $images,  'imageMobiles' => $imageMobiles ])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            // Execute the query and get the results before passing them to the view
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get(); // Execute the query using get() to fetch the results

            $products = Product::all();

            return view('pages.dai-ly.index', ['carts' => $carts, 'products' => $products, 'images' => $images , 'imageMobiles' => $imageMobiles,]);
        }
    }
}
