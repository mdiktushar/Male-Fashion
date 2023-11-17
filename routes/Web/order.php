<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripePaymentController;
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

Route::post('orders', [OrderController::class, 'placeOrder'])->name('placeOrder');

Route::get('orders', [OrderController::class, 'OrderIndex'])->name('orders');


Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('paymentPage');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripePayment');