<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\AdminController;
Use App\Http\Controllers\UserController;    
Use App\Http\Controllers\AccountController;
use App\Models\User;
use App\Http\Requests\RuleRegister;
Use App\Http\Controllers\SessionsController;   
Route::get('/', function () {
    return view('welcome');
});

 // adduser
 Route::get('/adduser', [UserController::class,'create']);
 Route::post('/adduser', [UserController::class,'store_'])->name ('register_store');

// Route::post('/register', [UserController::class,'register_store'])->name ('register_store');

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
    Route::get('list-client',[AdminController::class,'list_client']);
    Route::get('list-post',[AdminController::class,'list_post']);
    Route::get('list-ncc',[AdminController::class,'list_ncc']);
    Route::get('list-reg',[AdminController::class,'list_reg']);
    Route::get('list-profit-day',[AdminController::class,'list_profit_day']);
    Route::get('list-profit-month',[AdminController::class,'list_profit_month']);
    Route::get('list-user',[AdminController::class,'list_user']);


   

   // Route::post('/register', [RegisterController::class, 'CreateUser']);  



});
