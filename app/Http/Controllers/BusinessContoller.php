<?php

namespace App\Http\Controllers;

use App\Models\SetupForm;
use Illuminate\Http\Request;

class BusinessContoller extends Controller
{

    public function get_invoice()
    {
        $setup = SetupForm::first();
        return view('admin.business.invoice', ['setup' => $setup]);
    }

    public function get_payments()
    {
        return view('admin.business.online_payment');
    }

    public function quotes()
    {
        return view('admin.business.quotes');
    }
}
