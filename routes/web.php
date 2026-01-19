<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/admin/login','admin.login');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout',[UserController::class, 'logout'])->name('adminlogout');


Route::view('/user/login','user/user-login');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::get('/user/dashboard',[UserController::class,'userDashboard'] )->name('user.dashboard');
Route::get('/user/home',[UserController::class,'userHome'] )->name('user.home');
Route::post('/logout',[UserController::class, 'logout'])->name('userlogout');
Route::get('/product/{id}', [UserController::class, 'showProduct'])->name('user.product.show');
