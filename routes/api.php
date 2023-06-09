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
Route::get('/categories/{id}', [CategoryProductController::class, 'index']);
Route::get('/categoriess', [CategoryController::class, 'index']);
Route::get('/search/{keyword}', [ProductController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('categoryproducts', CategoryProductController::class);

Route::get('/products', [ProductController::class, 'index']);


Route::group(
    ['middleware' => 'auth:sanctum'],
    function () {
        // Route::apiResource('categories', CategoryController::class);
        Route::get('cart', [CartController::class, 'index']);
        Route::put('cart', [CartController::class, 'update']);
        Route::delete('cart', [CartController::class, 'destroy']);
        Route::delete('cart/delete', [CartController::class, 'deleteProduct']);

        Route::group(
            [
                'middleware' => 'isAdmin',
            ],
            function () {
                Route::post('products', [ProductController::class, 'store']);
                Route::patch('/products/{product}', [ProductController::class, 'update'])->middleware('isAdmin');
                Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('isAdmin');

                Route::post('categories', [CategoryController::class, 'store']);
                Route::patch('categories/{category}', [
                    CategoryController::class, 'update'
                ])->middleware('isAdmin');
                Route::delete('categories/{category}', [
                    CategoryController::class, 'destroy'
                ])->middleware('isAdmin');

                Route::apiResource('users', UserController::class);
                Route::apiResource('orders', OrderController::class);
                Route::apiResource('orderProducts', OrderProductController::class);
            }
        );
        Route::group(
            [
                'middleware' => 'isMod'
            ],
            function () {
                Route::post('products', [ProductController::class, 'store']);

                Route::post('categories', [CategoryController::class, 'store']);

                Route::apiResource('users', UserController::class);
                Route::apiResource('orders', OrderController::class);
                Route::apiResource('orderProducts', OrderProductController::class);
            }
        );
    }
);
