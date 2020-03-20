<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    public function open()
    {
        $data = "This data is open and can be accessed without the client being authenticated";
        return response()->json(compact('data'), 200);
    }
    public function closed()
    {
        $data = "Only authorized users can see this";
        return response()->json(compact('data'), 200);
    }

    /**
     * upadate function for user profile
     * via api method 
     * by structlooper
     */
    public function updateProfile(request $request)
    {
        /**
         * custom validation for email
         * by structlooper
         */
        $validatorPhone = Validator::make($request->all(), [

            'mobile' => 'min:10|max:10|unique:users',


        ]);
        /**
         * custom validation for mobile
         * by structlooper
         */
        $validatorEmail = Validator::make($request->all(), [


            'email' => 'string|email|max:255|unique:users',

        ]);

        $user = Auth::user();

        if ($request->input('email') != $user->email) {
            if ($validatorEmail->fails()) {
                return response()->json($validatorEmail->errors()->toJson(), 400);
            }
        } elseif ($request->input('email') == $user->email) {
            $user->email = $user->email;
        }
        if ($request->input('mobile') == $user->mobile) {
            $user->mobile = $user->mobile;
        } else {
            if ($validatorPhone->fails()) {
                return response()->json($validatorPhone->errors()->toJson(), 400);
            }
            $user->mobile = $request->input('mobile') ?? $user->mobile;
        }


        $user->firstName = $request->input('firstName') ?? $user->firstName;
        $user->lastName = $request->input('lastName') ?? $user->lastName;
        $user->address = $request->input('address') ?? $user->address;
        $user->pinCode = $request->input('pinCode') ?? $user->pinCode;
        $user->update();
        $data = 
        [
            'msg' => 'User Profile Updated successfully',
            'status' => 200,
        ];

        return response()->json(compact('data', 'user'), 200);
    }

    public function imageUpdate(request $request)
    {
        $user = Auth::user();
        if ($request->file('image')) {

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  $user->userId . '.' . $extension;
            $path ='uploades/profileImages/';
            $image->move($path, $filename);
            
            $user->Image = URL::asset($path). "/" . $filename;
            $user->update();
            $msg = 'Image updated sussefully';
            return response()->json(compact('msg', 'user'), 200);
        } else {
            return response()->json(['error' => 'Image is not inserted,something went wrong!!'], 404);
        }
    }
}
