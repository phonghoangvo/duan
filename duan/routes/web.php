<?php

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
Route::get('/giohang',[Tincontroller::class,'cart']);
Route::get('/thanhtoan',[Tincontroller::class,'cartcheck']);


//giohang
Route::get('add-to-cart/{id}', [Tincontroller::class,'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [Tincontroller::class,'updateCart'])->name('update_cart');
Route::delete('remove-from-cart', [Tincontroller::class,'remove'])->name('remove_from_cart');