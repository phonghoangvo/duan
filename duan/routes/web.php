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
Route::get('/cuahang',[TinController::class, 'cuahang']);
Route::get('/timkiem', 'App\Http\Controllers\TimkiemController@timkiem')->name('timkiem');
Route::get('/cuahangtheoloai/{id}', [Tincontroller::class, 'cuahangtheoloai'])->name('cuahangtheoloai');


