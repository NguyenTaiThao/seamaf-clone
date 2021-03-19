<?php

use App\Http\Controllers\admin\CategoryManageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductManageController;
use App\Http\Controllers\admin\UserManageController;
use App\Http\Controllers\admin\auth\AuthController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get("/login", [AuthController::class, 'index']);

Route::post("/login", [AuthController::class, 'auth'])->name('admin-login');

Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');

Route::middleware('auth:admin')->group(function () {
    Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');
    Route::get("/", function () {
        return Redirect(route('dashboard'));
    });

    //user
    Route::group(['prefix' => 'user-manage'], function () {
        //show
        Route::get('/', [UserManageController::class, 'index'])->name('user-manage');

        //add
        Route::get('/add', [UserManageController::class, 'getAdd'])->name('user-manage-add');
        Route::post('/add', [UserManageController::class, 'postAdd']);

        //edit
        Route::get('/edit/{user}', [UserManageController::class, 'getEdit'])->name('user-manage-edit');
        Route::post('/edit/{id}', [UserManageController::class, 'postEdit']);

        //delete
        Route::get('/delete/{user}', [UserManageController::class, 'delete'])->name('user-manage-delete');
    });

    // product 
    Route::group(['prefix' => 'product-manage'], function () {

        //show
        Route::get('/', [ProductManageController::class, 'index'])->name('product-manage');

        //add
        Route::get('/add', [ProductManageController::class, 'getAdd'])->name('product-manage-add');
        Route::post('/add', [ProductManageController::class, 'postAdd']);

        //edit
        Route::get('/edit/{product}', [ProductManageController::class, 'getEdit'])->name('product-manage-edit');
        Route::post('/edit/{id}', [ProductManageController::class, 'postEdit']);

        //delete
        Route::get('/delete/{product}', [ProductManageController::class, 'delete'])->name('product-manage-delete');
    });

    //category
    Route::group(['prefix' => 'category-manage'], function () {

        //show
        Route::get('/', [CategoryManageController::class, 'index'])->name('category-manage');

        //add
        Route::get('/add', [CategoryManageController::class, 'getAdd'])->name('category-manage-add');
        Route::post('/add', [CategoryManageController::class, 'postAdd']);

        //edit
        Route::get('/edit/{category}', [CategoryManageController::class, 'getEdit'])->name('category-manage-edit');
        Route::post('/edit/{id}', [CategoryManageController::class, 'postEdit']);

        //delete
        Route::get('/delete/{category}', [CategoryManageController::class, 'delete'])->name('category-manage-delete');
    });
});
