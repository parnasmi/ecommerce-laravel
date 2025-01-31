<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    "categories.products" => CategoryProductController::class,
]);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('favorites', FavoriteController::class);
});

// Route::group(['middleware' => ['auth:sanctum']], function () {

//     Route::group(['prefix' => 'favorites'], function () {
//         Route::get('', [FavoriteController::class, 'index']);
//         Route::get('{favorite}', [FavoriteController::class, 'get']);
//     });
// });
