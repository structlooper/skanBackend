<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Http\Request;

/**
 * functions for the view usrls for all auth routes
 * created by structlooper
 * 25/02/2020
 */

 class AdminController extends Controller
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
