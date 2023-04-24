<?php


use App\Http\Controllers\Api\Management\CategoryProductController;
use App\Http\Controllers\Api\Management\OrderController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\Management\CategoryController;
use App\Http\Controllers\Api\Management\OrderProductController;
use App\Http\Controllers\Api\Management\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Models\Category;
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

//
Route::get('/products', [ProductController::class,'index']);
Route::get('/categories/{id}', [CategoryProductController::class,'index']);
Route::get('/categoriess', [CategoryController::class,'index']);
Route::get('/search/{keyword}', [ProductController::class, 'search']);
Route::get('/products', [ProductController::class,'index']);

Route::middleware('auth:sanctum')->group(
    function () {
        Route::post('products', [ProductController::class, 'store']);
        Route::put('products', [ProductController::class, 'update']);
        Route::delete('products', [ProductController::class, 'delete']);
        
        Route::apiResource('categories', CategoryController::class);
        Route::apiResource('cart', CartController::class);
        Route::apiResource('categoryproducts', CategoryProductController::class);
        Route::apiResource('users', UserController::class);
        Route::apiResource('orders', OrderController::class);
        Route::apiResource('orderProducts', OrderProductController::class);
    }
);
