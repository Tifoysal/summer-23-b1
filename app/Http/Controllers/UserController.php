<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function login() 
    {
       
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        // $credentials=$request->only(['email','password']);
       
        // if(auth()->attempt([$request->email,$request->password]))


        $credentials=$request->except(['_token']);
        if(auth()->attempt($credentials))
        {
            //true block

            return redirect()->route('dashboard');

        }else{
            //false block

            return redirect()->back()->withErrors(['Invalid login information']);

        }



    }


   public function logout()
    {
        
        // auth()->logout();
        Auth::logout();

        return redirect()->route('admin.login')->with('msg','Logout Success');
    }

    public function profile()
    {
       
        
        return view('backend.pages.profile');
    }
}
