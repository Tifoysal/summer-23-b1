<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPasswordMail;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
            'first_name'=>$request->name,
            'last_name'=>"khan",
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
            Toastr::success('Login Success.');
            return redirect()->route('home')->with('msg','login success.');
        }

        Toastr::error('Invalid Credentials.');
        return redirect()->back();
       

    }


    public function sendResetLink(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'email'=>'required|email'
        ]);
       
        if($validate->fails())
        {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }


        $customer=Customer::where('email',$request->email)->first();
        if($customer)
        {

            //link - jekhane se click korbe
            // token generate
            $token=Str::random(32);
           
            $customer->update([
                'token'=>$token
            ]);

            $link=route('click.reset.link',$token);

            Mail::to($customer->email)->send(new ForgetPasswordMail($link));

            Toastr::success('Reset link sent to your email.');
            return redirect()->back();

        }

        Toastr::error("No customer found.");
        return redirect()->back();
       

        
    }
}
