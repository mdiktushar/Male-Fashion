<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('register', [MainController::class, 'register'])->name('registerPage');
Route::get('login', [MainController::class, 'login'])->name('loginPage');
Route::get('forget-password', [MainController::class, 'forgetPassword'])->name('forgetPasswordPage');
Route::get('reset-password', [MainController::class, 'resetPassword'])->name('resetPasswordPage');

Route::post('register', [AuthController::class, 'register'])->name('signup');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/verify-email/{code}', [AuthController::class, 'emailValidation'])->name('emailValidation');
Route::post('forget-password', [AuthController::class, 'forgetPasswordEmail'])->name('forgetPasswordEmail');
Route::put('reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');

Route::get('my-profile', [AuthController::class, 'myProfile'])->name('profile');
Route::patch('update-profile', [AuthController::class, 'updateProfile'])->name('updateProfile');