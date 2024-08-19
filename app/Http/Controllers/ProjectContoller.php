<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectContoller extends Controller
{
    public function all_project(){
        return view('admin.projects.all_projects');
    }
    public function time_entries(){
        return view('admin.projects.time_entries');
    }
    public function staff_overview(){
        return view('admin.projects.staff_time_overview');
    }
    public function staff_permission(){
        return view('admin.projects.staff_permissions');
    }
    public function staff_rate(){
        return view('admin.projects.staff_cost_rate');
    }
}
