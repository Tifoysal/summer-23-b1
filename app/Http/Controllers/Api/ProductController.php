<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products=Product::with('category')->get();
        return $this->responseWithSuccess($products,'all product list.');
        // return $this->responseWithSuccess(ProductResource::collection($products),'all product list.');
    }
    
    public function productView($id)
    {
        $product=Product::find($id);
        return $this->responseWithSuccess(ProductResource::make($product),'Single product view');
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
            return $this->responseWithError($validate->getMessageBag());   
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
        return $this->responseWithSuccess($product,"Product created successfull.");
    }

    public function update(Request $request,$id){
        $product=Product::find($id);
        if($product){
           $product->update([
            'name'=>$request->product_name,
            // 'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
           ]);

           return $this->responseWithSuccess($product,"Product Updated successfully.");
        }
    }
}
