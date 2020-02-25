<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

    use Illuminate\Http\Request;

    class DataController extends Controller
    {
            public function open() 
            {
                $data = "This data is open and can be accessed without the client being authenticated";
                return response()->json(compact('data'),200);

            }

            public function closed() 
            {
                $data = "Only authorized users can see this";
                return response()->json(compact('data'),200);
            }
            
            public function updateProfile(request $request)
            {

                $validatorPhone = Validator::make($request->all(), [
                    
                    'mobile' => 'min:10|max:10|unique:users',
                   
                    
                ]);
                $validatorEmail = Validator::make($request->all(), [
                    
                    
                    'email' => 'string|email|max:255|unique:users',
                    
                ]);
                // $messages = array(
                //   'min' => 'Phone number must be 10 char',
                //   'max' => 'phone number must be 10 char',
                //   'string' => 'char must be string not integer',
                //   'email' => 'the input must be of email formate',
                //   'unique' => "The entered record is already present in database",
                // );
    
                $user = Auth::user();
                
                if ($request->input('email') != $user->email) {
                    if($validatorEmail->fails()){
                        return response()->json($validatorEmail->errors()->toJson(), 400);
                    }
                    
                } 
                elseif($request->input('email') == $user->email ){
                    $user->email = $user->email;
                    
                    }
                if($request->input('mobile') == $user->mobile)
                {
                    $user->mobile = $user->mobile;
                }
                else{
                    if($validatorPhone->fails()){
                        return response()->json($validatorPhone->errors()->toJson(), 400);
                    }
                    $user->mobile = $request->input('mobile') ?? $user->mobile;
                }
                
                
                $user->firstName = $request->input('firstName') ?? $user->firstName;
                $user->lastName = $request->input('lastName') ?? $user->lastName;
                $user->address = $request->input('address') ?? $user->address;
                $user->pinCode = $request->input('pinCode') ?? $user->pinCode;
                $user->update();
                $message = 'User Profile Updated successfully';

                return response()->json(compact('message','user'),200);
            }
            public function imageUpdate(request $request)
            {
                $user = Auth::user();
                if ($request->file('image')) {
                    
                    $image = $request->file('image');
                    $extension = $image->getClientOriginalExtension(); //geting extension from image Extension
                    $filename =  uniqid() . '.' . $extension;
                    $image->move('uploades\profileImages\\', $filename);
                    $user->Image = $filename;
                    $user->update();
                    $msg = 'Image updated sussefully';
                    return response()->json(compact('msg','user'),200);
                }
                
               
                else{
                    return response()->json(['error' => 'Image is not inserted,something went wrong!!'] , 404);
                }
                
                
            }
    }