<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    
      $allProducts=Product::latest()->take(4)->get();
      
      return view('frontend.pages.home',compact('allProducts'));
    }


    public function login() 
    {
      return view('frontend.pages.login');  
    }


    public function registration() 
    {
      return view('frontend.pages.registration');  
    }

    // public function search(Request $request)
    // {
        // $request->all();
    // }


    public function search()
    {

      $searchKey=request()->search;

      // where('column_name','comparison','value')
      // example: where('price','=',100);
      // example: where('name','habijabi');

      //LIKE % Tushar      ---->matching from right side
      //LIKE Tushar %      ----->matching from left side

      $products=Product::where('name','LIKE','%'.$searchKey.'%')->get();

     
      return view('frontend.pages.search-product',compact('products','searchKey'));


      
    }
    
    
}
