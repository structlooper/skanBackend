<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Change Password by loged in user/Admin
     * by structlooper
     * 26/02/2020
     */
    public function resetPass()
    {
        return view('admin.resetPassword');
    }
    public function changing(request $request)
    {
        $rules = [
            'oldPassword' => 'required|min:8|max:20',
            'password' => 'required|min:8|max:20',
            'confirm_password' => 'required|min:8|max:20',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);
        
        $user = Auth::User();
        $oldPassword = $user->password;
        $userOldPass = $request->input('oldPassword');
      
        if (Hash::check($userOldPass, $oldPassword))
        {
            $newPass = $request->input('password');
            $confirmPass = $request->input('confirm_password');
            if ($newPass == $confirmPass) {
                
                $user->password = Hash::make($newPass);
                $user->update();
                return redirect('adminDashboard')->with('status' , "Password changed succesfully");
            }
            return redirect()->back()->with('status' , "New password and Confirm Password did'nt matched Please try again!");
        }
        
        return redirect()->back()->with('status' , 'Entered Password is incorrect Please try again with correct password');

    }




    /**
     * function for the registration sub admin
     * by structlooper
     */
    public function showAllUser()
    {
        $users = User::all();
        return view('admin.subAdmin.showAllUser')->with('users' ,$users);
    }

    public function registrtionPage()
    {
        return view('admin.regSubAdmin');
    }
    
     public function registrtion(request $request)
     {
        // $user = Auth::user();
        $newUser = new User();
        $newUser->firstName = $request->input('firstName');
        $newUser->lastName = $request->input('lastName');
        $str = substr($request->input('firstName'), -4);
        $newUser->userId = $str . rand(10000000,9);
        $newUser->email = $request->input('email');
        $newUser->mobile = $request->input('mobile');
        $newUser->password = hash::make($request->input('password'));
        $newUser->is_admin = 'admin';
        $newUser->save();
        return redirect('showAllUsers');//have to redirecting after registration of sub user
        
     }

    
}
