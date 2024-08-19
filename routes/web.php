<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectContoller;
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



    //  Contacts routes
    Route::get('/admin/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/admin/customer', [ContactController::class, 'customer'])->name('customer');
    Route::get('/admin/supplier', [ContactController::class, 'supplier'])->name('supplier');
    Route::get('/admin/add-contact', [ContactController::class, 'add_contacts'])->name('add.contacts');
    Route::get('/admin/import-contacts', [ContactController::class, 'import_contacts'])->name('import.contacts');
    //

    // Projects routes
    Route::get('/admin/projects', [ProjectContoller::class, 'all_project'])->name('all.project');
    Route::get('/admin/time-entries', [ProjectContoller::class, 'time_entries'])->name('time.entries');
    Route::get('/admin/staff-time-overview', [ProjectContoller::class, 'staff_overview'])->name('staff.overview');
    Route::get('/admin/staff-permission', [ProjectContoller::class, 'staff_permission'])->name('staff.permission');
    Route::get('/admin/staff-rates', [ProjectContoller::class, 'staff_rate'])->name('staff.rate');

});
