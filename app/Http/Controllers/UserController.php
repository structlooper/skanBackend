<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
        public function authenticate(Request $request)



        {
                $credentials = $request->only('email', 'password');
                $email = $request->input('email');
                $state = User::select('status')->where('email', $email)->first();

                if ($state->status === 'active') {
                        try {
                                if (!$token = JWTAuth::attempt($credentials)) {
                                        $data = [
                                                'wrong' => "invalid_credentials",
                                                'sol' => 'try agin with correct credentials',
                                                'status' => false
                                        ];
                                        return response()->json($data, 400);
                                }
                        } catch (JWTException $e) {
                                $data = [
                                        'wrong' => 'Something is wrong',
                                        'error' => 'Internal server error',
                                        'status' => 'token is not careated try agin after some time',
                                        'status' => false
                                ];
                                return response()->json($data, 500);
                        }
                        $status = True;
                        return response()->json(compact('token', 'status'));
                } else {

                        return response()->json(['error' => 'User Not active'], 400);
                }
        }

        public function register(Request $request)
        {
                $validator = Validator::make($request->all(), [
                        'firstName' => 'required|string|max:255',
                        'lastName' => 'string|max:255',
                        'mobile' => 'required|min:10|max:10|unique:users',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:6|confirmed',
                ]);

                if ($validator->fails()) {
                        $results = [
                                'success' => false,
                                'data' => 'Validation Error',
                                'msg' => $validator->errors()->first(),
                        ];
                } else {
                        $user = User::create([
                                'firstName' => $request->get('firstName'),
                                'lastName' => $request->get('lastName'),
                                $str = substr($request->input('firstName'), -4),
                                'userId' => $str . rand(10000000, 9),
                                'mobile' => $request->get('mobile'),
                                'email' => $request->get('email'),
                                'password' => Hash::make($request->get('password')),
                        ]);
                        $data = [
                                'success' => True,
                                'token' => JWTAuth::fromUser($user),
                                'msg' => 'Registor successfully',
                        ];

                        $results =  response()->json(compact('user', 'data'), 201);
                }

                return $results;
        }

        public function getAuthenticatedUser()
        {
                try {

                        if (!$user = JWTAuth::parseToken()->authenticate()) {
                                return response()->json(['error' => 'user_not_found'], 404);
                        }
                } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                        return response()->json(['error' => 'token_expired'], $e->getStatusCode());
                } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                        return response()->json(['error' => 'token_invalid'], $e->getStatusCode());
                } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                        return response()->json(['error' => 'token_absent'], $e->getStatusCode());
                }

                return response()->json(compact('user'));
        }

        public function updateUserPassword(request $request)
        {
        $rules = [
            'currentPassword' => 'required|min:6|max:20',
            'newPassword' => 'required|min:6|max:20',
            'confirmPassword' => 'required|min:6|max:20',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];
        $this->validate($request, $rules, $customMessages);

        $user = Auth::User();
        $oldPassword = $user->password;
        $userOldPass = $request->input('currentPassword');

        if (Hash::check($userOldPass, $oldPassword)) {
            $newPass = $request->input('newPassword');
            $confirmPass = $request->input('confirmPassword');
            if ($newPass == $confirmPass) {

                $user->password = Hash::make($newPass);
                $user->update();

                $data = [ 
                        'msg' => 'Password updated successfuly',
                        'status' => 201,
                        'success' => True,

                ];
                return response()->json(compact('user','data'), 201);
            }
                $data = [ 
                        'msg' => "New password and Confirm Password did'nt matched Please try again!",
                        'status' => 404,
                        'success' =>False,

                ];
            return response()->json(compact('user','data') ,404);
        }
         $data = [ 
                        'msg' => "Entered Password is incorrect Please try again with correct password",
                        'status' => 404,
                        'success' => False,

                ];

        return response()->json(compact('user','data') ,404);
        }
}
