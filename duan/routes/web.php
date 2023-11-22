<?php
 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TinController;

Route::get('/', [TinController::class, 'index']);
Route::get('/tintuc', [TinController::class, 'tintuc'])->name('tintuc');
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
