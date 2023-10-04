<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function roleList(){
        $allList=Role::paginate(8);
        return view('backend.pages.roles.list',compact('allList'));
    }
    public function roleCreate(){
        return view('backend.pages.roles.create');
    }
    public function roleStore(Request $request){

       $request->validate([
        'role_name'=>'required'
       ]);

       Role::create([
        'name'=>$request->role_name
       ]);
      
       return redirect()->back()->with('msg', 'successfully crated');
    }
    public function roleAssign(){
        return view('backend.pages.roles.assign');
    }

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
