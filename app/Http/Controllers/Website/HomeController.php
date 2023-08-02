<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
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


    public function addToCart($id)
    {
      // if(session()->has('cart'))//check session has cart
      // {
      // }


        $cart=session()->get('cart');
        // dd($cart);
        $product=Product::find($id);
       if(empty($cart))
       {
       
        //cart empty
        //add product to cart
        

        //add product to cart
        $newCart[$id]=[
          'name'=>$product->name,
          'image'=>$product->image,
          'price'=>$product->price,
          'quantity'=>1,
          'sub_total'=>$product->price * 1
        ];

        session()->put('cart',$newCart);

       }else
       {

        if(array_key_exists($id,$cart)){
          // dd("product exist");

          $cart[$id]['quantity']=$cart[$id]['quantity'] + 1 ;
          $cart[$id]['sub_total']=$cart[$id]['quantity'] * $cart[$id]['price'];
          session()->put('cart',$cart);
          
        }else{
          // dd("product not exist");

          $cart[$id]=[
            'name'=>$product->name,
            'image'=>$product->image,
            'price'=>$product->price,
            'quantity'=>1,
            'sub_total'=>$product->price * 1
          ];

          session()->put('cart',$cart);

        }
        

       }

      
       
       return redirect()->back()->with('msg','Product added to cart.');


    }
    

    public function cartView() 
    {
      $myCart=session()->get('cart');

      // dd($myCart);
      return view('frontend.pages.cart',compact('myCart'));
      
    }

    public function cartItemRemove($id)
    {
      // $cart=Session::get('cart')
      $cart=session()->get('cart');

    unset($cart[$id]);

    //  dd($cart);
    session()->put('cart',$cart);
    return redirect()->back();
     
     
    }

    public function clearCart()
    {
      
      session()->forget('cart');
      return redirect()->back();

    }

    public function logout()
    {
      // dd("dsfasfa");
      auth()->guard('customer')->logout();
      return redirect()->route('home')->with('msg','Logout Success.');
    }


    public function checkout() {

      return view('frontend.pages.checkout');
      
    }
    
}
