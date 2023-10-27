<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\EmailVerification;
use App\Mail\ForgetPassword;
use App\Models\Secret;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    //
    public function register(RegisterRequest $request)
    {
        // dd($request);

        // photo store
        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->storeAs('public/images', $imageName);

        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'picture' => $imageName,
            'password' => bcrypt($request->password),
        ]);
        $loginSuccess = $this->userLogin($request->email, $request->password);
        if ($loginSuccess) {
            return redirect()->route('loginPage');
        } else {
            return redirect()->route('loginPage');
        }
    }

    public function login(LoginRequest $request)
    {
        // dd($request);
        $loginSuccess = $this->userLogin($request->email, $request->password);
        if ($loginSuccess) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    private function userLogin($email, $password)
    {
        // dd($email, $password);
        // finding the user
        $user = User::where('email', $email)->first();
        // dd($user);
        // check is user is exist
        if ($user) {
            // check if account is active
            if ($user->is_active) {
                // check if password is correct
                if (auth()->attempt(['email' => $email, 'password' => $password])) {
                    return true;
                } else {
                    // if password is wring
                    session()->flash('message', 'wrong password');
                    return false;
                }
            } else {
                // if user is not verified
                // email verified code generation
                session()->flash('message', 'Verify your email and activate your account');
                $emailVerifiedCode = Str::random(40).$user->id;
                if ($user->secrets) {
                    $secret = $user->secrets;
                } else {
                    $secret = new Secret();
                    $secret->user_id = $user->id;
                }
                $secret->email_verified_code = $emailVerifiedCode;
                $secret->save();

                //sending the email
                Mail::to($user->email)->send(new EmailVerification($user->fullname, $emailVerifiedCode));
                return false;
            }
        } else {
            // if user is not found
            session()->flash('message', 'user not found.!');
            return false;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function changePassword(Request $request)
    {
    }

    public function forgetPasswordEmail (Request $request) {

        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $otp = rand(1000,9999);
            $secret = $user->secrets;
            $secret->top = $otp;

            $secret->save();

            Mail::to($request->email)->send(new ForgetPassword($user->fullname, $otp));

            return redirect()->route('resetPasswordPage', $user->id);
        } else {
            session()->flash('message', 'There is no account with this email....!');
            return redirect()->back();
        }
    }

    public function resetPassword(Request $request)
    {
    }

    public function emailValidation($code) {
        $secret = Secret::where('email_verified_code', $code)->first();
        $user = $secret->user;
        $user->is_active = true;
        $user->save();

        session()->flash('message', 'Email verification successfull, please login');
        return redirect()->route('loginPage');
        
    }
}
