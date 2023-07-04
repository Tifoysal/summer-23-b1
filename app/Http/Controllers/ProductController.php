<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        
        $productsCollection=Product::paginate(10);
        

        return view('backend.pages.product.list',compact('productsCollection'));
    }


    public function createForm()
    {


        return view('backend.pages.product.create');
    }


    public function store(Request $request)
    {
       

        //dd($request->all());//check data are coming or not

        $request->validate([
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10'
        ]);

      
        if($request->hasFile('product_image'))
        {
            $image=$request->file('product_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
            'image'=>$fileName
        ]);

        return redirect()->back()->with('msg','Product Created successfully.');
    }
}
