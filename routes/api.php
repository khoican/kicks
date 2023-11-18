<?php

use App\Http\Controllers\Api\ProdukController;
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

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/brands', App\Http\Controllers\Api\BrandController::class);
Route::apiResource('/categories', App\Http\Controllers\Api\CategoryController::class);
// Route::apiResource('/produks', App\Http\Controllers\Api\ProdukController::class);

Route::controller(ProdukController::class)->group(function () {
    Route::get('produks', [ProdukController::class,'index']);
    Route::get('produks/best-seller', [ProdukController::class,'bestSeller']);
});

Route::apiResource('/orders', App\Http\Controllers\Api\OrderController::class);
Route::apiResource('/order-details', App\Http\Controllers\Api\OrderDetailController::class);
