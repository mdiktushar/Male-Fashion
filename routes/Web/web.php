<?php

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

Route::get('/', [MainController::class, 'index'])->name('homePage');
Route::get('/cart', [MainController::class, 'cart'])->name('cartPage');
Route::get('/shop', [MainController::class, 'shop'])->name('shopPage');
Route::get('/single', [MainController::class, 'singleProduct'])->name('singleProductPage');
Route::get('/single', [MainController::class, 'checkout'])->name('checkoutPage');
Route::get('/register', [MainController::class, 'register'])->name('registerPage');