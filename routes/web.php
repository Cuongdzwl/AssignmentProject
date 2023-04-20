<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\Management\CategoryController;
use App\Http\Controllers\Api\Management\OrderController;
use App\Http\Controllers\Api\Management\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class,'indexAutoLoadCart'])->name('cart.view');

    Route::get('/admin', [HomeController::class,'admin'])->name('admin');
    Route::get('/admin/orders', [OrderController::class,'indexAutoLoadOrders'])->name('admin.order');
    Route::get('/admin/products', [ProductController::class,'indexAutoLoadProducts'])->name('admin.product');
    Route::get('/admin/categories', [CategoryController::class,'indexAutoLoadCategories'])->name('admin.category');
});

require __DIR__.'/auth.php';

