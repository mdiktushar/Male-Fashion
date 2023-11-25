<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('pages.public.index', compact('products'));
    }

    public function indexRediredt()
    {
       return redirect()->route('homePage');
    }

    public function checkout()
    {
        return view('pages.user.checkout');
    }

    public function shop()
    {
        $products = Product::all();

        return view('pages.public.shop', compact('products'));
    }

    public function shopSearch(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $products = Product::where('title', 'like', '%' . $request->name . '%')->get();

        return view('pages.public.shop', compact('products'));
    }

    public function singleProduct(Product $product)
    {
        $products = Product::where('category', $product->category)->get();
        // dd($product);
        return view('pages.public.singleProduct', ['product' => $product, 'products' => $products]);
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function forgetPassword()
    {
        return view('pages.auth.forgetPassword');
    }

    public function resetPassword()
    {
        return view('pages.auth.resetPassword');
    }

    public function login()
    {
        return view('pages.auth.login');
    }
}
