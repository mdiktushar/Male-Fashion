<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function placeOrder (Request $request) {
        // $input = $request->validate([
        //     'fullname' => 'required',
        //     'address' => 'required',
        //     'phone' => 'required',
        // ]);

        $carts = auth()->user()->carts()->get();
        

        return redirect()->back();
    }
}
