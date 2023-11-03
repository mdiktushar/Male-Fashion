<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index () {
        $products = Product::all();
        return view('pages.public.index', compact('products'));
    }

    public function cart () {
        return view('pages.public.cart');
    }
    
    public function checkout () {
        return view('pages.public.checkout');
    }

    public function shop () {
        $products = Product::all();

        return view('pages.public.shop', compact('products'));
    }

    public function shopSearch (Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
        $products = Product::where('title', 'like', '%'.$request->name.'%')->get();

        return view('pages.public.shop', compact('products'));
    }

    public function singleProduct (Product $product) {
        return view('pages.public.singleProduct', ['product' => $product]);
    }

    public function register () {
        return view('pages.auth.register');
    }

    public function forgetPassword () {
        return view('pages.auth.forgetPassword');
    }

    public function resetPassword () {
        return view('pages.auth.resetPassword');
    }

    public function login () {
        return view('pages.auth.login');
    }
    
}
