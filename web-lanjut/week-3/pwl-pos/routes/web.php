<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::prefix('/user')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('user.index');
    Route::post('', [UserController::class, 'store'])->name('user.store');
    Route::patch('/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('user.delete');
});
// Level Routes
Route::prefix('/level')->group(function () {
    Route::get('', [LevelController::class, 'index'])->name('level.index');
    Route::post('', [LevelController::class, 'store'])->name('level.store');
    Route::patch('/{id}', [LevelController::class, 'update'])->name('level.update');
    Route::delete('/{id}', [LevelController::class, 'delete'])->name('level.delete');
});
// Category Routes
Route::prefix('/category')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('category.index');
    Route::post('', [CategoryController::class, 'store'])->name('category.store');
    Route::patch('/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
