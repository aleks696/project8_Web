<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);



Route::get('/products', [CategoryController::class, 'index']);
Route::post('/products', [CategoryController::class, 'store']);
Route::get('/products/{id}', [CategoryController::class, 'show']);
Route::put('/products/{id}', [CategoryController::class, 'update']);
Route::delete('/products/{id}', [CategoryController::class, 'destroy']);
