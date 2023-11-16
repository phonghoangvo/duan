<?php
 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TinController;

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


Route::get('/', [TinController::class, 'index']);

Route::get('/news', [TinController::class, 'news']);

Route::get('/lienhe', [TinController::class, 'lienhe']);

Route::get('/gioithieu', [TinController::class, 'gioithieu']);
    
Route::get('/listtintuc', [TinController::class, 'listtintuc']);

Route::get('/admin', [TinController::class, 'admin']);

Route::get('tin/themtin', [TinController::class, 'themtin']);
    
Route::post('tin/themtin', [TinController::class, 'themtin_']);

Route::get('xoa/{id}', [TinController::class,'xoa']);

Route::get('tin/suatin/{id}', [TinController::class, 'suatin']);

Route::post('capnhat/{id}', [TinController::class, 'capnhat']);