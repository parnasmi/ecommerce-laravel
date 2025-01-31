<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('login', [AuthController::class, 'login']);

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    "categories.products" => CategoryProductController::class
]);
