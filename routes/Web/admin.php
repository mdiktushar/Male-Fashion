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
Route::get('dashboard', [AdminController::class, 'index'])->name('index');

Route::get('admin-product', [AdminController::class, 'adminProduct'])->name('adminProductPage');

Route::get('admin/create', [AdminController::class, 'addProductView'])->name('addProductPage');
Route::post('admin/create', [AdminController::class, 'storeProduct'])->name('addProduct');
Route::get('admin/{product}', [AdminController::class, 'editProductView'])->name('editProductPage');
Route::patch('admin/{product}', [AdminController::class, 'updateProduct'])->name('updateProduct');
Route::delete('admin/product/delete/{product}', [AdminController::class, 'deleteProduct'])->name('deleteProduct');

Route::get('admin-profile', [AdminController::class, 'adminProfile'])->name('adminProfilePage');
Route::get('admin/user/list', [AdminController::class, 'allUsersView'])->name('allUsersPage');
Route::patch('admin/role/{user}', [AdminController::class, 'roleUpdate'])->name('updateRole');
Route::delete('admin/user/delete/{user}', [AdminController::class, 'deleteUser'])->name('deleteUser');

Route::get('admin-orders', [AdminController::class, 'adminOrdersView'])->name('adminOrdersPage');
Route::get('admin-order/details/{order}', [AdminController::class, 'adminOrderDetailsView'])->name('adminOrderDetailsPage');
Route::patch('admin-order/update/{order}', [AdminController::class, 'adminOrderUpdate'])->name('adminOrderUpdate');