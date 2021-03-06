<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;
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


//-------------------------------------------------------------------------------------------------
// CLIENT ROUTE
Route::get('/', [HomePageController::class, 'index'])->name("homepage");

Route::get('/product-detail/{product}', [ProductController::class, 'index'])->name("product-detail");

Route::get('/category/{category}', [CategoryController::class, 'index'])->name("category");

Route::get('/sign-up', [AuthController::class, 'signUp'])->name("sign-up");

Route::post('/sign-up', [AuthController::class, 'Auth']);

Route::get('/sign-in', [AuthController::class, 'signIn'])->name('sign-in');

Route::post('/sign-in', [AuthController::class, 'auth']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/add-cart', [CartController::class, 'add']);

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/add-cart', [CartController::class, 'add'])->name('add-cart');

Route::get('/delete-cart/{productId}', [CartController::class, 'delete'])->name('delete-cart');

