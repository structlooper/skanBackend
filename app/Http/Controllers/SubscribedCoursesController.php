<?php

namespace App\Http\Controllers;

use App\paymentData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class SubscribedCoursesController extends Controller
{
    //
    public function showDatas()
    {
        // $pay_ids = DB::table('payment_datas')->pluck('pay_id');
        // $status = DB::table('payment_datas')->pluck('status');
        $id = Auth::user()->id;
        $data = DB::table('users')
        ->select('users.id','users.userId','users.email','users.firstName','users.mobile','payment_datas.pay_id','payment_datas.created_at','payment_datas.status','payment_datas.courses','payment_datas.amount')
        ->join('payment_datas','payment_datas.user_id','=','users.id')
        ->where('payment_datas.user_id' , $id)
        ->get();

        return response()->json($data,200);
    }
}
