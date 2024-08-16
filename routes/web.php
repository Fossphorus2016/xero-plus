<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return view('welcome');
    }
});



Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/settings', [AdminController::class, 'get_settings'])->name('settings');

    Route::post('/form/store', [AdminController::class, 'store'])->name('form.store');




    Route::get('/admin/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/admin/customer', [ContactController::class, 'customer'])->name('customer');
    Route::get('/admin/supplier', [ContactController::class, 'supplier'])->name('supplier');
});
