<?php

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
Route::get('/giohang',[Tincontroller::class,'cart']);
Route::get('/thanhtoan',[Tincontroller::class,'cartcheck']);

//giohang
Route::get('/giohang',[CartController::class,'giohang'])->name('giohang');
Route::get('/giohang/cuahang',[CartController::class,'themgiohang'])->name('giohang.cuahang');