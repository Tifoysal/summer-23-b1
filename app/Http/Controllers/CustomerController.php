<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRegistrationRequest;
use App\Mail\ForgetPasswordMail;
use App\Mail\SendOtpMail;
use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function store(CustomerRegistrationRequest $request)
    {
        $otp=rand(100000,999999);
        
        Customer::create([
            'first_name' => $request->name,
            'last_name' => "khan",
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'otp' => $otp,
            'otp_expired_at' => Carbon::now()->addMinutes(3),
        ]);

        //send otp to customer email
        Mail::to($request->email)->send(new SendOtpMail($otp));

        Toastr::success('Registration success.');
        return redirect()->route('customer.otp.form');
    }


    public function update(CustomerRegistrationRequest $request)
    {
       
        $otp=rand(100000,999999);
        
        Customer::create([
            'first_name' => $request->name,
            'last_name' => "khan",
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'otp' => $otp,
            'otp_expired_at' => Carbon::now()->addMinutes(3),
        ]);

        //send otp to customer email
        Mail::to($request->email)->send(new SendOtpMail($otp));

        Toastr::success('Registration success.');
        return redirect()->route('customer.otp.form');
    }

    public function dologin(Request $request)
    {

        //validation

        $credentials = $request->except('_token');
        // dd($credentials);

        if (auth()->guard('customer')->attempt($credentials)) {
            if (auth('customer')->user()->email_verified_at != null) {
                Toastr::success('Login Success.');
                return redirect()->route('home')->with('msg', 'login success.');
            }

            auth('customer')->logout();
            Toastr::error('Account not verified.');
            return redirect()->route('customer.login');
        }

        Toastr::error('Invalid Credentials.');
        return redirect()->back();
    }


    public function sendResetLink(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validate->fails()) {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }


        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {

            //link - jekhane se click korbe
            // token generate
            $token = Str::random(32);

            $customer->update([
                'token' => $token,
                'token_expired_at' => Carbon::now()->addMinutes(3),
            ]);

            $link = route('click.reset.link', $token);

            Mail::to($customer->email)->send(new ForgetPasswordMail($link));

            Toastr::success('Reset link sent to your email.');
            return redirect()->back();
        }

        Toastr::error("No customer found.");
        return redirect()->back();
    }

    public function clickResetLink($token)
    {

        $customer = Customer::where('token', $token)->whereDate('token_expired_at', '=', now())
            ->whereTime('token_expired_at', '>=', now())
            ->first();
        if ($customer) {
            return view('frontend.pages.reset-password', compact('token'));
        }

        Toastr::error('Token expired or invalid. Please resend.');
        return redirect()->route('customer.login');
    }

    public function resetPassword(Request $request, $token)
    {

        $validate = Validator::make($request->all(), [
            'password' => 'required|confirmed'
        ]);

        if ($validate->fails()) {
            Toastr::error($validate->getMessageBag());
            return redirect()->back();
        }

        $customer = Customer::where('token', $token)->first();
        if ($customer) {
            $customer->update([
                'password' => bcrypt($request->password)
            ]);
        }

        Toastr::success('Your password reset successfully.');
        return redirect()->route('customer.login');
    }
}
