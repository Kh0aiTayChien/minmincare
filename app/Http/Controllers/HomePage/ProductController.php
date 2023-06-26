<?php

namespace App\Http\Controllers\HomePage;

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
    public function index(Request $request)
    {
        $products = Product::all();
        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
            return response()
                ->view('pages/san-pham/index', ['products' => $products])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages/san-pham/index', ['products' => $products, 'carts' => $carts]);
        }
    }

    public function buy_action(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->first();
        if ($session == null) {
            $session = new Session();
            $session->session_code = $sessionID;
            $session->save();
        }

        $productId = $request->input('product');
        $product = Product::findOrFail($productId);
        $cart = Cart::where('session_id', $session->id)
            ->where('product_id', $product->id)
            ->first();
        if ($cart === null) {
            $cart = new Cart();
            $cart->quantity = 1;
            $cart->session_id = $session->id;
            $cart->product_id = $product->id;
            $cart->save();
            return view('page-layout.item', ['cart' => $cart]);
        } else {
            $cart = Cart::where('session_id', $session->id)
                ->where('product_id', $product->id)
                ->first();
            $cart->increment('quantity');
            $cart->save();
            $viewData = [
                'status' => 'exist_cart',
                'quantity' => $cart->quantity,
                'cart' => $cart->id
            ];
            return response()->json($viewData);
        }
    }

    public function plus(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->firstOrFail();

        $cartID = $request->input('cart');
        $cart = Cart::where('id', $cartID)
            ->where('session_id', $session->id)
            ->first();

        $cart->increment('quantity');
        $cart->save();
        $viewData = [
            'status' => 'ok',
            'quantity' => $cart->quantity,
            'cart' => $cart->id
        ];
        return response()->json($viewData);
    }

    public function subtraction(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->firstOrFail();

        $cartID = $request->input('cart');

        $cart = Cart::where('id', $cartID)
            ->where('session_id', $session->id)
            ->first();
        if ($cart->quantity > 1) {
            $cart->decrement('quantity');
            $cart->save();
            $viewData = [
                'status' => 'ok',
                'quantity' => $cart->quantity,
                'cart' => $cart->id
            ];
            return response()->json($viewData);
        } else {
            $viewData = [
                'status' => 'delete',
                'cart' => $cart->id
            ];
            $cart->delete();
            return response()->json($viewData);
        }
    }

    public function delete_cart(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->firstOrFail();

        $cartID = $request->input('cart');

        $cart = Cart::where('id', $cartID)
            ->where('session_id', $session->id)
            ->first();

        $viewData = [
            'status' => 'delete',
            'cart' => $cart->id
        ];
        $cart->delete();
        return response()->json($viewData);
    }
}
