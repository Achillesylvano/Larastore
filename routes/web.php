<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\AccessoryController as AdminAccessoryController;

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

Route::get('/', [ProductController::class, 'computersIndex'])->name('products.computer');
Route::get('/phone', [ProductController::class, 'phoneIndex'])->name('products.phone');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/accessories', [AccessoryController::class, 'index'])->name('accessories.index');
Route::get('/accessories/{accessory}', [AccessoryController::class, 'show'])->name('accessories.show');


Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('product', AdminProductController::class)->except(['show']);
    Route::resource('accessory',AdminAccessoryController::class)->except(['show']);
});
