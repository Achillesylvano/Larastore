<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\RegisterUserController;
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
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::resource('product', AdminProductController::class)->except(['show']);
    Route::resource('accessory',AdminAccessoryController::class)->except(['show']);
});

Route::get('/user/dashboard', IndexController::class)->name('dashboard');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticate']);
Route::delete('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/contact',[ContactController::class,'indexContactUS'])->name('contact');
Route::post('/contact',[ContactController::class,'contactUs']);

Route::get('/register',[RegisterUserController::class,'create'])->name('register');
Route::post('/register',[RegisterUserController::class,'store']);

Route::get('/', [ProductController::class, 'computersIndex'])->name('products.computer');
Route::get('/phone', [ProductController::class, 'phoneIndex'])->name('products.phone');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/accessories', [AccessoryController::class, 'index'])->name('accessories.index');
Route::get('/accessories/{accessory}', [AccessoryController::class, 'show'])->name('accessories.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


