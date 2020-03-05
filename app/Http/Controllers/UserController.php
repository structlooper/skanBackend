<?php

    namespace App\Http\Controllers;

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
            $status = True;
                // Session::put('loginAceess' , '1');
                // Cookie::queue('email', '1231231', 333);
            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                        $data = [ 'wrong' =>"invalid_credentials",
                        'sol' => 'try agin with correct credentials',
                        'status' => false
                ];
                    return response()->json($data, 400);
                }
            } catch (JWTException $e) {
                    $data = ['wrong' => 'Something is wrong',  
                                'error' => 'Internal server error',
                                'status' => 'token is not careated try agin after some time',
                                'status' => false
                        ];
                return response()->json($data, 500);
            }

            return response()->json(compact('token','status'));
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

            if ($validator->fails()){
                $results = [
                'success' => false,
                'data' => 'Validation Error',
                'msg' => $validator->errors()->first(),
                ];
                }
                else{
                        $user = User::create([
                                'firstName' => $request->get('firstName'),
                                'lastName' => $request->get('lastName'),
                                $str = substr($request->input('firstName'), -4),
                                'userId' => $str . rand(10000000,9),
                                'mobile' => $request->get('mobile'),
                                'email' => $request->get('email'),
                                'password' => Hash::make($request->get('password')),
                        ]);
                        $data = [
                                'success' => True,
                                'token' => JWTAuth::fromUser($user),
                                'msg' => 'Registor successfully',
                        ];

                        $results =  response()->json(compact('user','data'),201);
                }
                
                return $results;

        }

        // /**
        //  * Method used to login
        //  * check
        //  */
        // public function login(Request $request){

        //         if($request->isMethod('post')){
        
        //             $data = $request->input();
        //             if(Auth::attempt(['email'=>$data['email'] , 'password' => $data['password'] ,  'is_admin' => '1'])){
        //                 Session::put('loginAceess' , '1');
        //                 Cookie::queue('email', '1231231', 333);
        //                 return redirect('/dashboard');
        
        //             }
        //             else{
        //                 $errors = new MessageBag(['message' => ['Email and password is invalid.']]);
        //                 return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
        //             }
        //         }
        
        //         return redirect('/');
        //     }
        public function getAuthenticatedUser()
            {
                    try {

                            if (! $user = JWTAuth::parseToken()->authenticate()) {
                                    return response()->json(['user_not_found'], 404);
                            }

                    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                            return response()->json(['token_expired'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    return response()->json(compact('user'));
            }
    }