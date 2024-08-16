<?php

namespace App\Http\Controllers;

use App\Models\SetupForm;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function get_settings()
    {
        $setup = SetupForm::first();
        return view('admin.setting', ['setup' => $setup]);
    }


    public function store(Request $request)
    {
        $formData = [
            'input_type_1' => $request->input('input_type_1'),
            'input_name_1' => $request->input('input_name_1'),
            'input_type_2' => $request->input('input_type_2'),
            'input_name_2' => $request->input('input_name_2'),
            'input_type_3' => $request->input('input_type_3'),
            'input_name_3' => $request->input('input_name_3'),
            'input_type_4' => $request->input('input_type_4'),
            'input_name_4' => $request->input('input_name_4'),
            'input_type_5' => $request->input('input_type_5'),
            'input_name_5' => $request->input('input_name_5'),
        ];

       
        SetupForm::where('id', $request->page_id)->update([
            'fields' => json_encode($formData),
        ]);

        return back()->with('message', 'Form data updated successfully!');
    }
}
