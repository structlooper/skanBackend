<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminDashboard');
    }
    public function adminProifile(){
        return view('admin.profile');
    }
    public function timeline(){
        Helper::addToLog('Organisation details added');
        return view('admin.adminTimeline');
    }
    public function widget_chart(){
        return view('admin.widget-chart');
    }
    public function widget_data(){
        return view('admin.widget_data');
    }
}
