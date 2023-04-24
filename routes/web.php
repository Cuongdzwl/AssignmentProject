<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\Management\CategoryController;
use App\Http\Controllers\Api\Management\CategoryProductController;
use App\Http\Controllers\Api\Management\OrderController;
use App\Http\Controllers\Api\Management\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use LaravelDaily\PermissionsUI\Controllers\RoleController;
use LaravelDaily\PermissionsUI\Controllers\PermissionController;
use LaravelDaily\PermissionsUI\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//--------------------------------------------------------------------------
// Public Routes
//--------------------------------------------------------------------------

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Search
Route::get('/search/{keyword}', [ProductController::class, 'searchAutoLoad'])->name('search');
Route::redirect('/search', '/');
// Category
Route::get('/categories/{id}', [CategoryProductController::class, 'indexAutoLoad'])->name('category.products');
Route::redirect('/categories', '/');

//--------------------------------------------------------------------------
// Authentication Routes
//--------------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    // User Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // User 
    Route::get('/cart', [CartController::class, 'indexAutoLoadCart'])->name('cart.view');
    // Admin Settings
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    Route::get('/admin/orders', [OrderController::class, 'indexAutoLoadOrders'])->name('admin.order');
    Route::get('/admin/products', [ProductController::class, 'indexAutoLoadProducts'])->name('admin.product');
    Route::get('/admin/categories', [CategoryController::class, 'indexAutoLoadCategories'])->name('admin.category');

});

Route::redirect(config('permission_ui.url_prefix'), config('permission_ui.url_prefix') . '/users');

Route::group(
    [
        'middleware' => config('permission_ui.middleware'),
        'prefix'     => config('permission_ui.url_prefix'),
        'as'         => config('permission_ui.route_name_prefix')
    ],
    function () {
        Route::resource('roles', RoleController::class)->except('show');
        Route::resource('permissions', PermissionController::class)->except('show');
        Route::resource('users', UserController::class)->only('index', 'edit', 'update');
    }
);

require __DIR__ . '/auth.php';