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

Route::post('/place_Order', [OrderController::class, 'placeOrder'])->name('placeOrder');


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe')->name('paymentPage');
    Route::post('stripe', 'stripePost')->name('stripePayment');
});