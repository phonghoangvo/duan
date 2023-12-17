<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tincontroller;

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



//giohang
Route::get('/giohang',[CartController::class,'cart']);
Route::get('/thanhtoan',[CartController::class,'cartcheck']);
Route::get('add-to-cart/{id}', [CartController::class,'addToCart'])->name('add_to_cart');
Route::match(['patch'], '/update-cart', 'CartController@updateCart')->name('update_cart');
Route::delete('remove-from-cart', [CartController::class,'remove'])->name('remove_from_cart');