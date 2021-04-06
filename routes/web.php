<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/account', [AuthController::class, 'get'])->name('account');
Route::post('/account', [AuthController::class, 'post'])->name('auth.account');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [HomeController::class, 'shop'])->name('home.shop');

Route::prefix('cart')->group(function () {
    Route::get('/', [HomeController::class, 'cart'])->name('cart.index');
    Route::get('/add/{id}', [CartController::class, 'addProduct'])->name('cart.add');
    Route::get('/delete/{id}}', [CartController::class, 'deleteProduct'])->name('cart.delete');
    Route::get('/deleteAll/{id}}', [CartController::class, 'deleteAllProduct'])->name('cart.deleteAll');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('cart.checkout')->middleware('auth');
    Route::get('/checkout/order', [OrderController::class, 'create'])->name('order.create');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('/users')->group(function () {
        Route::get('/',  [AdminController::class, 'listUsers'])->name('admin.users');
        Route::get('/create',  [AdminController::class, 'createUsers'])->name('admin.users.create');
        Route::post('/create',  [AdminController::class, 'storeUsers'])->name('admin.users.store');
    });
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
