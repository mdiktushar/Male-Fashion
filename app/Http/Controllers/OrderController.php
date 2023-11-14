<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function placeOrder(Request $request)
    {
        $input = $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        // Flash input data to session
        $request->session()->flash('orderData', $input);

        return redirect()->route('paymentPage');

        $user = auth()->user();

        $order = $user->orders()->create();

        $carts = $user->carts()->get();

        foreach ($carts as $cart) {
            $input['product_id'] = $cart->product_id;
            $input['quantity'] = $cart->quantity;
            $input['price'] = $cart->product()->first()->price;

            $order->orderItems()->create($input);

            $cart->delete();
        }

        session()->flash('success', 'Order Plased');
        return redirect()->back();
    }
}
