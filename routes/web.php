<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,"index"])->name("home.index");
Route::prefix('/admin')->group(function () {
    //category
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class,"index"])->name("category.index");
        Route::get('/create', [CategoryController::class,"create"])->name("category.create");
        Route::post('/store', [CategoryController::class,"store"])->name("category.store");
        Route::get('/edit/{id}', [CategoryController::class,"edit"])->name("category.edit");
        Route::put('/edit/{category}', [CategoryController::class,"update"])->name("category.update");
    });
    //product
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class,"index"])->name("product.index");
        Route::get('/create', [ProductController::class,"create"])->name("product.create");
        Route::post('/store', [ProductController::class,"store"])->name("product.store");
        Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name("product.edit");
        Route::put('/product/edit/{product}', [ProductController::class,'update'])->name("product.update");
    });
});

