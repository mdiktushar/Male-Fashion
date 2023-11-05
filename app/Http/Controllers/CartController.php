<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $totalPrice = 0;
        foreach ($carts as $cart) {
            $totalPrice += ($cart->product()->first()->price * $cart->quantity);
        }
        return view('pages.user.cart', compact('carts', 'totalPrice'));
    }

    public function addToCart(Request $request)
    {
        // adding to cart
        auth()->user()->carts()->create($request->all());
        //updating the product quantity.
        $product = Product::findOrFail($request->product_id);
        $product->quantity -= $request->quantity;
        $product->save();

        return redirect()->back();
    }

    public function updateCart(Request $request, Cart $cart)
    {
        $product = Product::findOrFail($cart->product_id);

        if ($request->quantity > $product->quantity + $cart->quantity) {
            session()->flash('error', 'Crossing The Limit');
            return redirect()->back();
        } else {
            if ($request->quantity > $cart->quantity) {
                $removeFromProductQuantity = $request->quantity - $cart->quantity;

                $product->quantity -= $removeFromProductQuantity;
                $product->save();
            } elseif ($request->quantity < $cart->quantity) {
                $addToProductQuantity = $cart->quantity - $request->quantity;

                $product->quantity += $addToProductQuantity;
                $product->save();
            } else {
                session()->flash('success', 'Nothing to update');
                return redirect()->back();
            }

            $cart->quantity = $request->quantity;
            $cart->save();

            session()->flash('success', 'Quantity Updated');
            return redirect()->back();
        }
    }

    public function deleteCart(Cart $cart)
    {
        //updating the product quantity.
        $product = Product::findOrFail($cart->product_id);
        $product->quantity += $cart->quantity;
        $product->save();

        $cart->delete();
        session()->flash('success', 'Cart is successfully deleted');
        return redirect()->back();
    }
}
