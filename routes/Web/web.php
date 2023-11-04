<?php

use App\Http\Controllers\CartController;
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
Route::get('/shop', [MainController::class, 'shop'])->name('shopPage');
Route::get('/shop/search', [MainController::class, 'shopSearch'])->name('shopPageSearch');
Route::get('/single{product}', [MainController::class, 'singleProduct'])->name('singleProductPage');
Route::get('/checkout', [MainController::class, 'checkout'])->name('checkoutPage');


Route::get('/cart', [CartController::class, 'cart'])->name('cartPage');
Route::post('/cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::delete('/cart/{cart}', [CartController::class, 'deleteCart'])->name('deleteCart');