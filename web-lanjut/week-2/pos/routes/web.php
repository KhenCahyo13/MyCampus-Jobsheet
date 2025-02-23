<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']); // For showing Home page

Route::prefix('/products')->group(function () { // Products route with prefix
    Route::prefix('/category')->group(function () { // Category of products route with prefix
        Route::get('/baby-kid', [ProductController::class, 'babyKid']); // For baby kid category
        Route::get('/beauty-health' ,[ProductController::class, 'beautyHealth']); // For beauty health category
        Route::get('/food-beverage', [ProductController::class, 'foodBeverage']); // For food beverage category
        Route::get('/home-care', [ProductController::class, 'homeCare']); // For home care category
    });
});

Route::prefix('/user')->group(function () { // User route with prefix
    Route::get('/{id}/name/{name}', [UserController::class, 'showingName']); // For user with id and name params
});

Route::prefix('/sales')->group(function () { // Sales route with prefix
    Route::get('', [SalesController::class, 'index']); // Index route of sales
});