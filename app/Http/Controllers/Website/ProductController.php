<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts(){

      
       return view('frontend.pages.all-product'); 
    }


    public function categoryWiseProducts($catId)
    {
        
       $category= Category::with('products')->find($catId);
        return view('frontend.pages.category-products',compact('category'));
       
       
        
    }
}
