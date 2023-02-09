<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\RegistrationController;
use \App\Http\Controllers\LogoutController;
use \App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('login', function () {return view('admin.login');})->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('register', function (){return view('admin.register');})->name('register');
Route::post('register', [RegistrationController::class, 'save']);
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('admin', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('admin');
Route::resource('/admin/page', PageController::class)
    ->middleware('auth');
