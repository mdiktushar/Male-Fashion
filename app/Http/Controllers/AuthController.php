<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register (RegisterRequest $request) {
        // dd($request);
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $this->userLogin($request->email, $request->password);
    }

    public function login (LoginRequest $request) {
        // dd($request);
    }

    private function userLogin ($email, $password) {
        dd($email, $password);
    }

    public function logout (Request $request) {
        
    }

    public function changePassword (Request $request) {
        
    }

    public function resetPassword (Request $request) {
        
    }
}
