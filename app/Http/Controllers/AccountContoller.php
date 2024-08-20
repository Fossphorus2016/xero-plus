<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountContoller extends Controller
{
    public function bank(){
        return view('admin.accounting.bank_account');
    }

    public function bank_search(){
        return view('admin.accounting.bank_search');
    }

    public function add_bank(){
        return view('admin.accounting.add_bank_account');
    }

    public function report(){
        return view('admin.accounting.reports');
    }


    public function advanced(){
        return view('admin.accounting.advanced');
    }

    public function profit_loss(){
        return view('admin.accounting.profit_loss');
    }

    public function sales_tax(){
        return view('admin.accounting.sales_tax_report');
    }

    public function chart_of_account(){
        return view('admin.accounting.chart_of_account');
    }

    public function fixed_asset(){
        return view('admin.accounting.fixed_asset');
    }
}
