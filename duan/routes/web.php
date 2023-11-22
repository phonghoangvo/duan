<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\TinController;

Route::get('/', [TinController::class, 'index']);
Route::get('/news', [TinController::class, 'news']);
Route::get('/news/{id}', [TinController::class, 'chitietnew'])->name('chitietnew');
Route::get('/lienhe', [TinController::class, 'lienhe']);
Route::get('/gioithieu', [TinController::class, 'gioithieu']);

//Quanlitintuc
Route::get('/admin/listtintuc', [TinController::class, 'listtintuc'])->name('listtintuc');
Route::get('/admin', [TinController::class, 'admin']);
Route::get('/admin/themtin', [TinController::class, 'themtin'])->name('themtin');
Route::post('/admin/themtin', [TinController::class, 'themtin_'])->name('themtin_');
Route::get('xoa/{id}', [TinController::class, 'xoa']);
Route::get('/admin/suatin/{id}', [TinController::class, 'suatin'])->name('suatin');
Route::put('/admin/capnhat/{id}', [TinController::class, 'capnhat'])->name('capnhat');
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

Route::get('/lienhe',[ContactController::class,'lienhe']);
Route::post('/send',[ContactController::class,'send'])->name('sendemail');
Route::get('/',[TinController::class, 'index']);

Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');

Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');

