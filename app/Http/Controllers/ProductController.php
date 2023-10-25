<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use DataTables;

class ProductController extends Controller
{
    public function list()
    {
        
        // $productsCollection=Product::with('category')->where('status','active')->paginate(100);
        // // dd($productsCollection);




        return view('backend.pages.product.list');
    }

    public function ajaxProduct()
    {

        $data = Product::select('id','name','price','status')->get();
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
 
                       $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    
    
    }

   public function delete($id)
   {
    
   $product=Product::find($id);
   
   $product->delete();


   return redirect()->back()->with('msg','Product Deleted successfully.');

    }

    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();

        return view('backend.pages.product.edit',compact('product','categories'));
    }


    public function createForm()
    {

        $categories=Category::all();
        
        return view('backend.pages.product.create',compact('categories'));
    }


    public function store(Request $request)
    {
       

       // dd($request->all());//check data are coming or not

        $request->validate([
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);

      
        if($request->hasFile('product_image'))
        {
            $image=$request->file('product_image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
            'image'=>$fileName
        ]);

        return redirect()->back()->with('msg','Product Created successfully.');
    }



    public function update(Request $request,$id)
    {
       

       // dd($request->all());//check data are coming or not

        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);

    
        $product=Product::find($id);
    

        $product->update([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
            'quantity'=>$request->product_stock,
            'description'=>$request->description,
        
        ]);

        return redirect()->back()->with('msg','Product Updated successfully.');
    }
}
