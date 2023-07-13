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

    
}
