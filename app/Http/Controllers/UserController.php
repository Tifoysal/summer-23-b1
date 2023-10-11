<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function roleAssign($id){

        $role=Role::with('permissions')->find($id);
        
        $assignedPermissions=$role->permissions->pluck('permission_id')->toArray();
        // dd($assignedPermissions);
        $permissions=Permission::all();
        return view('backend.pages.roles.assign',compact('permissions','role','assignedPermissions'));
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

    public function assingPermission(Request $request,$role_id)
    {
       
        $validate=Validator::make($request->all(),[
            'permission'=>'required'
        ]);

        if($validate->fails())
        {
            dd($validate->getMessageBag());
        }

        // dd($request->all());

        RolePermission::where('role_id',$role_id)->delete();

        foreach($request->permission as $permission)
        {
            RolePermission::create([
                'permission_id'=>$permission,
                'role_id'=>$role_id,//2
            ]);
        }

        return redirect()->back();


        
    }
}
