<?php


use App\Http\Controllers\Api\Management\CategoryProductController;
use App\Http\Controllers\Api\Management\OrderController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\Management\CategoryController;
use App\Http\Controllers\Api\Management\OrderProductController;
use App\Http\Controllers\Api\Management\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('users',UserController::class);
Route::apiResource('products',ProductController::class);
// Route::get('/product')
Route::apiResource('categoryproducts',CategoryProductController::class);
Route::apiResource('orders',OrderController::class);
Route::apiResource('orderProducts',OrderProductController::class);
Route::apiResource('categories',CategoryController::class);
Route::apiResource('cart',CartController::class);

