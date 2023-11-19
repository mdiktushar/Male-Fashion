<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        return view('pages.user.orders', compact('orders'));
    }

    public function ordersDetails (Order $order) {
        $orderitems = $order->orderItems()->get();
        // dd($orderitems);
        return view('pages.user.orderDetails', compact('orderitems'));
    }
}
