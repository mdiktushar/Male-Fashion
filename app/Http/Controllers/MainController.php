<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index () {
        return view('pages.public.index');
    }

    public function cart () {
        return view('pages.public.cart');
    }
    
    public function checkout () {
        return view('pages.public.checkout');
    }

    public function shop () {
        return view('pages.public.shop');
    }

    public function singleProduct () {
        return view('pages.public.singleProduct');
    }

    public function register () {
        return view('auth.register');
    }

    public function forgetPassword () {
        return view('auth.forgetPassword');
    }

    public function resetPassword () {
        return view('auth.resetPassword');
    }

    public function login () {
        return view('auth.login');
    }
    
}
