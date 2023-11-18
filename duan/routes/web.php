<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
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
Route::get('/',[ProductController::class,'index']);
Route::get('/list',[ProductController::class,'list']);
Route::get('/add',[ProductController::class,'add']);
Route::post('/save',[ProductController::class,'save_add'])->name('save_add');
Route::get('/edit/{id}',[ProductController::class,'edit']);
Route::put('/update/{id}',[ProductController::class,'update']);
Route::get('/del/{id}',[ProductController::class,'del']);

Route::get('/comment/list',[CommentController::class,'list']);
Route::get('/comment/add',[CommentController::class,'add']);