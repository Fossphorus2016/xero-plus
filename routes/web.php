<?php

use App\Http\Controllers\AccountContoller;
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

    Route::get('/invite/user', [AdminController::class, 'invite'])->name('invite.user');


    // Accounting routes
    Route::get('/admin/bank', [AccountContoller::class, 'bank'])->name('bank');
    Route::get('/admin/bank/search', [AccountContoller::class, 'bank_search'])->name('bank.search');
    Route::get('/admin/add-bank', [AccountContoller::class, 'add_bank'])->name('add.bank');
    Route::get('/admin/report', [AccountContoller::class, 'report'])->name('report');
    Route::get('/admin/advanced', [AccountContoller::class, 'advanced'])->name('advanced');
    Route::get('/admin/profit/loss', [AccountContoller::class, 'profit_loss'])->name('profit.loss');
    Route::get('/admin/sales/tax/report', [AccountContoller::class, 'sales_tax'])->name('sales.tax');
    Route::get('/admin/chart', [AccountContoller::class, 'chart_of_account'])->name('chart.of.account');
    Route::get('/admin/fixed-assets', [AccountContoller::class, 'fixed_asset'])->name('fixed.asset');

});
