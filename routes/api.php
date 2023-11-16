<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', App\Http\Controllers\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\LoginController::class)->name('login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/brands', App\Http\Controllers\BrandController::class);
Route::apiResource('/categories', App\Http\Controllers\CategoryController::class);
Route::apiResource('/produks', App\Http\Controllers\ProdukController::class);
Route::apiResource('/orders', App\Http\Controllers\OrderController::class);
Route::apiResource('/order-details', App\Http\Controllers\OrderDetailController::class);
