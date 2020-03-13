<?php

namespace App\Http\Controllers;

use App\paymentData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class SubscribedCoursesController extends Controller
{
    //
    public function showDatas()
    {
        // $pay_ids = DB::table('payment_datas')->pluck('pay_id');
        // $status = DB::table('payment_datas')->pluck('status');

        $data = DB::table('users')
        ->select('users.id','users.userId','users.email','users.firstName','users.mobile','payment_datas.pay_id','payment_datas.created_at','payment_datas.status')
        ->join('payment_datas','payment_datas.user_id','=','users.id')
        ->get();

        return response()->json($data,200);
    }
}
