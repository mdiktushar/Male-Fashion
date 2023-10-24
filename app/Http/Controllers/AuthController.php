<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register (RegisterRequest $request) {
        // dd($request);
    }

    public function login (LoginRequest $request) {
        // dd($request);
    }

    public function logout (Request $request) {
        
    }

    public function changePassword (Request $request) {
        
    }

    public function resetPassword (Request $request) {
        
    }
}
