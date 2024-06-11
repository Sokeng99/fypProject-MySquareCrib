<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required'
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>'Validation fails',
                'errors'=>$validator->errors()
            ],422);
        }
        $admin=Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'message'=>'Register Successful',
            'data'=>$admin
        ],400);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'message'=>'Validation fails',
                'errors'=>$validator->errors()
            ],422);
        }

        $admin=Admin::where('email',$request->email)->first();
        if($admin){
            if(Hash::check($request->password,$admin->password)){

                $token=$admin->createToken('auth-token')->plainTextToken;

                $roles= $admin->getRoleNames();
                // $permissions=$admin->getAllPermissions();
                return response()->json([
                    'message'=>'Login Successfully',
                    'token'=>$token,
                    'data'=>[
                        'admin'=>$admin,
                        'roles'=>$roles
                        // 'permissions'=>$permissions->pluck('name')
                    ]
                ],200);

            }else{
                return response()->json([
                    'message'=>'Login Fail',
                    'errors'=>$validator->errors()
                ],400);
            }
        }else{
            return response()->json([
                'message'=>'Login Fail',
                'errors'=>$validator->errors()
            ],400);
        }

    }
}
