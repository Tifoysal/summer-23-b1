<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products=Product::all();
        

        return response()->json([
            'success'=>true,
            'data'=>$products,
            'message'=>'All product list',
            'status_code'=>200
        ]);
    }  
    
    public function productView($id)
    {

        $product=Product::find($id);
        
        return response()->json([
            'success'=>true,
            'data'=>$product,
            'message'=>'Single product view',
            'status_code'=>200
        ]);
    }   


    public function  create(Request $request)
    {
        
        $validate=Validator::make($request->all(),[
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);

        if($validate->fails())
        {
            return response()->json([
            'success'=>false,
            'data'=>[],
            'message'=>$validate->getMessageBag(),
            'status_code'=>200
            ]);
        }
       
      
        if($request->hasFile('product_image'))
        {
            $image=$request->file('product_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        $product=Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
            'image'=>$fileName
        ]);


        return response()->json([
            'success'=>true,
            'data'=>$product,
            'message'=>'Product created successfull.',
            'status_code'=>200
        ]);


    }
}
