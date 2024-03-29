<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Session;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Mail;
use App\Mail\InfoUserMailable;
use Google\Service\Exception;
use Illuminate\Support\Carbon;

class CartController extends Controller
{
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
//        dd($cart);
        if ($cart === null) {
            $cart = new Cart();
            $cart->quantity = 1;
            $cart->session_id = $session->id;
            $cart->product_id = $product->id;
            $cart->save();
            $viewData = [
                'status' => 'no_cart',
                'quantity' => $cart->quantity,
                'cart' => $cart->id
            ];
            return response()->json($viewData);
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
//        dd(cart);
        $cart->increment('quantity');
        $cart->save();
        $viewData = [
            'status' => 'ok',
            'quantity' => $cart->quantity,
            'cart' => $cart->id,
            'price' => $cart->Product->price
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
                'cart' => $cart->id,
                'price' => $cart->Product->price

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
    public function send(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->firstOrFail();

        $cartID = $request->input('cart');

        $carts = Cart::where('session_id', $session->id)->get();
        $viewData = [
            'status' => 'send',
        ];
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));

        $rows = [];
        $data= [];

        foreach ($carts as $cart) {
            $row = [
                $request->name,
                $request->phone,
                $request->address,
                $cart->Product->name,
                $cart->quantity,
                $cart->Product->price,
                $cart->quantity * $cart->Product->price
            ];
            $item = [
                $cart->Product->name,
                $cart->quantity,
                $cart->Product->price,
                $cart->quantity * $cart->Product->price
            ];

            $rows[] = $row; // Append the row to the $rows array
            $data[] = $item;
        }

        array_push($rows, []);
        $totalItems = count($rows) - 1;
        Mail::to('info@minmincare.vn')->send(new InfoUserMailable($rows, $totalItems, $data));
        Sheets::sheet('chien')->append($rows);

        $session->delete();
        return response()->json($viewData);
    }

    public function sendEmail(Request $request)
    {
        $sessionCookie = config('session.cookie');
        $sessionID = $request->Cookie($sessionCookie);
        $session = Session::where('session_code', $sessionID)->firstOrFail();

        $cartID = $request->input('cart');

        $carts = Cart::where('session_id', $session->id)->get();
        $viewData = [
            'status' => 'send',
        ];
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));

        $rows = [];
        $data= [];

        foreach ($carts as $cart) {
            $row = [
                $request->name,
                $request->phone,
                $request->address,
                $cart->Product->name,
                $cart->quantity,
                $cart->Product->price,
                $cart->quantity * $cart->Product->price
            ];
            $item = [
                $cart->Product->name,
                $cart->quantity,
                $cart->Product->price,
                $cart->quantity * $cart->Product->price
            ];

            $rows[] = $row; // Append the row to the $rows array
            $data[] = $item;
        }

        array_push($rows, []);
        $totalItems = count($rows) - 1;
        Mail::to('info@minmincare.vn')->send(new InfoUserMailable($rows, $totalItems, $data));
        Sheets::sheet('chien')->append($rows);
        dd($session);
        $session->delete();
        return response()->json($viewData);
    }
    public function payment(){
        return view('pages.cart.index-c');
    }
}
