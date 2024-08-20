<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessContoller extends Controller
{
    public function quotes(){
        return view('admin.business.quotes');
    }
}
