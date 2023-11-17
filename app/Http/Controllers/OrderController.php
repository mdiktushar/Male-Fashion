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
    }

    public function OrderIndex () {
        $orders = auth()->user()->orders()->get();
        dd($orders);
        return view('pages.user.orders');
    }
}
