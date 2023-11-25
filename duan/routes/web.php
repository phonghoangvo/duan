<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\UserController;    
Use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TinController;
use App\Models\User;
use App\Http\Requests\RuleRegister;
Use App\Http\Controllers\SessionsController;   

//giaodien
Route::get('/', [TinController::class, 'index']);
Route::get('/news', [TinController::class, 'news']);
Route::get('/gioithieu', [TinController::class, 'gioithieu']);
Route::get('/news/{id}', [TinController::class, 'chitietnew'])->name('chitietnew');
Route::get('/lienhe',[ContactController::class,'lienhe']);
Route::post('/send',[ContactController::class,'send'])->name('sendemail');
Route::get('/cuahang', 'App\Http\Controllers\TinController@timkiem')->name('timkiem');
Route::get('/cuahang/{id?}', [TinController::class, 'cuahang'])->name('cuahang');
Route::get('/chitiet/{id}',[TinController::class,'chitiet'])->name('chitiet');

//Quanlitintuc
Route::get('/admin/listtintuc', [TinController::class, 'listtintuc'])->name('listtintuc');
Route::get('/admin', [TinController::class, 'admin']);
Route::get('/admin/themtin', [TinController::class, 'themtin'])->name('themtin');
Route::post('/admin/themtin', [TinController::class, 'themtin_'])->name('themtin_');
Route::get('xoa/{id}', [TinController::class, 'xoa']);
Route::get('/admin/suatin/{id}', [TinController::class, 'suatin'])->name('suatin');
Route::put('/admin/capnhat/{id}', [TinController::class, 'capnhat'])->name('capnhat');




 // adduser
 Route::get('/adduser', [UserController::class,'create']);
 Route::post('/adduser', [UserController::class,'store_'])->name ('register_store');

Route::get('/user/update/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);

Route::get('/user/delete/{id}', [UserController::class, 'delete']);

// account
Route::get('login',[AccountController::class,'login'])->name('login');
Route::post('login',[AccountController::class,'login_'])->name('logingo');
Route::get('register',[AccountController::class,'register'])->name('register');
Route::post('register',[AccountController::class,'register_']);
Route::get('forgot-password1',[AccountController::class,'forgot_password'])->name('forgot-password');
Route::post('forgot-password1',[AccountController::class,'forgot_password_'])->name('password.reset');
Route::get('forgot-password',[AccountController::class,'reset_password'])->name('password.reset');
Route::delete('logout',[AccountController::class,'logout'])->name('logout');  

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index_admin']);
    Route::get('list-user',[AdminController::class,'list_user']);
});
 
