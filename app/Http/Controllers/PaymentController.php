<?php

namespace App\Http\Controllers;

use App\paymentData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    public function PayDatas(request $request)
    {


        $validator = Validator::make($request->all(), [
            'pay_id' => 'required|string|max:255|unique:payment_Datas',
            'user_id' => 'required|string|max:255',
            'status' => 'required',
            'courses' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $results = [
                'success' => false,
                'data' => 'Validation Error',
                'error' => $validator->errors()->first(),
            ];
        } else {
            $data = new paymentData();
            $data->pay_id = $request->input('pay_id');
            $data->user_id = $request->input('user_id');
            $data->status = $request->input('status');
            $data->courses = $request->input('courses');
            $data->save();
            $msg = 'Payment Data saved successfully';
            // return response()->json(compact('data', 'msg'), 200);
            $status = [
                'success' => True,
                'msg' => 'Payment Data saved successfully',
            ];

            $results =  response()->json(compact('data', 'status'), 201);
        }

        return $results;
        // return $request;
    }
}
