<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $totalPrice = 0;
        foreach($carts as $cart) {
            $totalPrice += ($cart->product()->first()->price * $cart->quantity);
        }
        return view('pages.user.cart', compact('carts', 'totalPrice'));
    }

    public function addToCart (Request $request) {
        auth()->user()->carts()->create($request->all());
        return redirect()->back();
    }

    public function deleteCart (Cart $cart) {
        $cart->delete();
        return redirect()->back();
    }
}
