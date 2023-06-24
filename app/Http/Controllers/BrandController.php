<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list()
    {
        $misty=Brand::all();

        return view("backend.pages.brand.list",compact('misty'));
    }

    public function create()
    {
        return view('backend.pages.brand.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           'brand_name'=>'required',
        ]);

       Brand::create([
          'name'=>$request->brand_name,
          'description'=>$request->description,
       ]);


       return redirect()->back();

    }
}
