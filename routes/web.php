<?php

use App\Http\Controllers\admin\CategoryManageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductManageController;
use App\Http\Controllers\admin\UserManageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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



// CLIENT ROUTE
Route::get('/', function () {
    return view('index');
})->name("homepage");

Route::get('/product-detail', function () {
    return view('product.productDetail');
})->name("product-detail");

Route::get('/sign-up', function () {
    return view('authentication.signUp');
})->name("sign-up");

Route::get('/sign-in', function () {
    return view('authentication.signIn');
})->name('sign-in');

Route::get('/cart', function () {
    return view('cart.cart');
})->name('cart');

// ADMIN ROUTE

Route::group(["prefix" => "admin", "namespace" => "admin"], function () {
    // auth route 
    Route::get("/login", [AuthController::class, 'index']);

    Route::post("/login", [AuthController::class, 'auth'])->name('admin-login');

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');


    // private route for admin
    Route::group(['middleware' => 'auth'], function () {

        Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'user-manage'], function () {
            Route::get('/', [UserManageController::class, 'index'])->name('user-manage');
            Route::get('/add', [UserManageController::class, 'getAdd'])->name('user-manage-add');
            Route::post('/edit/{id}', [UserManageController::class, 'postAdd'])->name('user-manage-edit');
            Route::post('/delete/{id}', [UserManageController::class, 'delete'])->name('user-manage-delete');
        });

        Route::group(['prefix' => 'product-manage'], function () {
            Route::get('/', [ProductManageController::class, 'index'])->name('product-manage');
            Route::get('/add', [ProductManageController::class, 'getAdd'])->name('product-manage-add');
            Route::post('/edit/{id}', [ProductManageController::class, 'postAdd'])->name('product-manage-edit');
            Route::post('/delete/{id}', [ProductManageController::class, 'delete'])->name('product-manage-delete');
        });

        Route::group(['prefix' => 'category-manage'], function () {
            Route::get('/', [CategoryManageController::class, 'index'])->name('category-manage');
            Route::get('/add', [CategoryManageController::class, 'getAdd'])->name('category-manage-add');
            Route::post('/edit/{id}', [CategoryManageController::class, 'postAdd'])->name('category-manage-edit');
            Route::post('/delete/{id}', [CategoryManageController::class, 'delete'])->name('category-manage-delete');
        });
    });
});
