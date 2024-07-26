<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
