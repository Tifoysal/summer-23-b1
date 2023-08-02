<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:6'
        ]);
        
        Customer::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
        ]);

return redirect()->route('home')->with('msg','Registration success.');

    }


    public function dologin(Request $request) {
       
        //validation

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->guard('customer')->attempt($credentials))
        {
            return redirect()->route('home')->with('msg','login success.');
        }

        dd("invalid user");


    }
}
