<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        if($validate->fails()){
            return $this->responseWithError($validate->getMessageBag());
        }

        $customer=Customer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

       return $this->responseWithSuccess($customer,'Registration Success');

    }

    public function login(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        if($validate->fails()){
            return $this->responseWithError($validate->getMessageBag());
        }

        $credentials = $request->only('email', 'password');
        $token = Auth::guard('api')->attempt($credentials);

        if($token)
        {
            //valid
            return $this->responseWithSuccess($token,'Login Success');
        }

        //invalid
        return $this->responseWithError('Invalid User.');

    }
}
