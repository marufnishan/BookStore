<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){   
            return response()->json(['error'=>$validator->errors()]);   
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
        return response()->json(['success'=>'User register successfully.']);
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $validation = Validator::make($input,[
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validation->fails()){
            return response()->json(['error'=>$validation->errors()]);
        }

        if(Auth::attempt(['email'=>$input['email'],'password'=>$input['password']])){
            $data = Auth::user();
            $token = $data->createToken('user');
            return response()->json(['token'=>$token]);
        }
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['success'=>'logout']);
    }
    
}
