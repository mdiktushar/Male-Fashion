<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register (RegisterRequest $request) {
        // dd($request);

        // photo store
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->storeAs('public/images', $imageName);
        // email verified code generation
        $emailVerifiedCode = Str::random(40);

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'picture' => $imageName,
            'password' => bcrypt($request->password),
            'email_verified_code' => $emailVerifiedCode,
        ]);
        $this->userLogin($request->email, $request->password);
    }

    public function login (LoginRequest $request) {
        // dd($request);
        $loginSuccess = $this->userLogin($request->email, $request->password);
        if($loginSuccess) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    private function userLogin ($email, $password) {
        // dd($email, $password);
        // finding the user
        $user = User::where('email', $email)->first();
        // dd($user);
        // check is user is exist
        if ($user) {
            // check if account is active
            if ($user->is_active) {
                // check if password is correct
                if(auth()->attempt(['email' => $email, 'password' => $password])) {
                    return true;
                } else {
                    // if password is wring
                    return false;
                }
            } else {
                // if user is not verified
                return false;
            }
        } else {
            // if user is not found
            return false;
        }
    }

    public function logout (Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function changePassword (Request $request) {
        
    }

    public function resetPassword (Request $request) {
        
    }
}
