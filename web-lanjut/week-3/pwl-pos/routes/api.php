<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\LevelController;
use App\Http\Controllers\API\StockController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('jwt-verification');
});

Route::middleware('jwt-verification')->group(function () {
    Route::resources([
        'levels' => LevelController::class,
        'categories' => CategoryController::class,
        'stocks' => StockController::class,
        'items' => ItemController::class,
        'users' => UserController::class,
    ]);
});
