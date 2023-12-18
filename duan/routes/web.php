<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tincontroller;
use App\Http\Controllers\CartController;

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

Route::get('/',[TinController::class, 'index']);

Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');

Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');

Route::get('/login',[AccountController::class,'login'])->name('login');

//giohang
Route::get('/giohang',[CartController::class,'cart'])->name('giohang');
Route::get('/thanhtoan',[CartController::class,'cartcheck']);
Route::post('/quatrinh-thanhtoan',[CartController::class,'processCheckout'])->name('quatrinhtt');
Route::get('add-to-cart/{id}', [CartController::class,'addToCart'])->name('add_to_cart');
Route::put('update-cart', [CartController::class,'updateCart'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class,'remove'])->name('remove_from_cart');
