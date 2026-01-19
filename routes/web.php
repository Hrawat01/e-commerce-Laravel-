<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/user/dashboard',[AdminController::class,'userDashboard'] );
Route::get('/user/home',[AdminController::class,'userHome'] );
Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
