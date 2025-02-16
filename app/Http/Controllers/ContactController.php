<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('admin.contacts.contact');
    }
    public function customer(){
        return view('admin.contacts.customer');
    }
    public function supplier(){
        return view('admin.contacts.suppliers');
    }

    public function add_contacts(){
        return view('admin.contacts.add_contacts');
    }

    public function import_contacts(){
        return view('admin.contacts.import_contacts');
    }
}
