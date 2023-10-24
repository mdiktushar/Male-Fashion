<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index () {
        return view('index');
    }

    public function cart () {
        return view('cart');
    }
    
    public function checkout () {
        return view('checkout');
    }

    public function shop () {
        return view('shop');
    }

    public function singleProduct () {
        return view('singleProduct');
    }

    public function register () {
        return view('register');
    }

    public function login () {
        return view('login');
    }
    
}
