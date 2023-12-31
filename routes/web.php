<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CaraulselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name("home.index");
Route::get('/category/product/{id}', [CategoryController::class, "detail"])->name("category.product");
Route::get('/product/{id}', [ProductController::class, "detail"])->name("product.detail");
Route::get('/news', [NewsController::class, "news"])->name("fe.news.index");
Route::get('/news/{id}', [NewsController::class, "detail"])->name("news.detail");
Route::get('/address', [AddressController::class, "address"])->name("fe.address.index");
Route::get('/login', [AccountController::class, "login"])->name("login.index");
Route::post('/login', [AccountController::class, "checkLogin"])->name("login.check");
Route::get('/logout', [AccountController::class, "logout"])->name("logout");
Route::get('/about', [AboutController::class, "about"])->name("fe.about.index");
Route::post('/mail', [MailController::class, "sendMail"])->name("fe.sendMail");

Route::middleware(['auth.login'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/', [DashboardController::class, "index"])->name("dashboard.index");
        Route::get('/mail', [MailController::class, "index"])->name("mail.index");
        //carausel
        Route::prefix('/carausel')->group(function () {
            Route::get('/', [CaraulselController::class, "index"])->name("carausel.index");
            Route::get('/create', [CaraulselController::class, "create"])->name("carausel.create");
            Route::post('/create', [CaraulselController::class, "store"])->name("carausel.store");
            Route::get('/delete/{id}', [CaraulselController::class, "delete"])->name("carausel.delete");
        });
        //banner
        Route::prefix('/banner')->group(function () {
            Route::get('/', [BannerController::class, "index"])->name("banner.index");
            Route::get('/create', [BannerController::class, "create"])->name("banner.create");
            Route::post('/create', [BannerController::class, "store"])->name("banner.store");
            Route::get('/delete/{id}', [BannerController::class, "delete"])->name("banner.delete");
        });
        //account
        Route::prefix('/account')->group(function () {
            Route::get('/', [AccountController::class, "index"])->name("account.index");
            Route::get('/edit/{id}', [AccountController::class, "edit"])->name("account.edit");
            Route::put('/edit/{account}', [AccountController::class, "update"])->name("account.update");
        });
        //category
        Route::prefix('/category')->group(function () {
            Route::get('/', [CategoryController::class, "index"])->name("category.index");
            Route::get('/create', [CategoryController::class, "create"])->name("category.create");
            Route::post('/store', [CategoryController::class, "store"])->name("category.store");
            Route::get('/edit/{id}', [CategoryController::class, "edit"])->name("category.edit");
            Route::put('/edit/{category}', [CategoryController::class, "update"])->name("category.update");
        });
        //product
        Route::prefix('/product')->group(function () {
            Route::get('/', [ProductController::class, "index"])->name("product.index");
            Route::get('/create', [ProductController::class, "create"])->name("product.create");
            Route::post('/store', [ProductController::class, "store"])->name("product.store");
            Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name("product.edit");
            Route::put('/product/edit/{product}', [ProductController::class, 'update'])->name("product.update");
        });
        Route::prefix('/news')->group(function () {
            Route::get('/', [NewsController::class, "index"])->name("news.index");
            Route::get('/create', [NewsController::class, "create"])->name("news.create");
            Route::post('/store', [NewsController::class, "store"])->name("news.store");
            Route::get('/edit/{new}', [NewsController::class, "edit"])->name("news.edit");
            Route::put('/edit/{new}', [NewsController::class, "update"])->name("news.update");
        });
        //address
        Route::prefix('/address')->group(function () {
            Route::get('/', [AddressController::class, "index"])->name("address.index");
            Route::get('/edit/{address}', [AddressController::class, "edit"])->name("address.edit");
            Route::put('/edit/{address}', [AddressController::class, "update"])->name("address.update");
        });
        //address
        Route::prefix('/about')->group(function () {
            Route::get('/', [AboutController::class, "index"])->name("about.index");
            Route::get('/edit/{id}', [AboutController::class, "edit"])->name("about.edit");
            Route::put('/edit/{about}', [AboutController::class, "update"])->name("about.update");
        });
    });
});


