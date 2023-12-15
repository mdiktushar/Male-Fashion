<?php

use App\Http\Controllers\AdminController;
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

// Route::resource('admin/', AdminController::class);
Route::get('/dashboard', [AdminController::class, 'index'])->name('index');

Route::get('admin/create', [AdminController::class, 'addProductView'])->name('addProductPage');
Route::post('admin/create', [AdminController::class, 'storeProduct'])->name('addProduct');
