<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

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

    public function placeOrder(Request $request){

      $request->validate([
        //input fields here => rules here
      ]);

      $myCart=session()->get('cart');

      // dd($myCart);//

      // dd($request->all());
      
      try
      {
        DB::beginTransaction();
        //create order first
        $order=Order::create([
            'customer_id'=>auth('customer')->user()->id,
            'name'=>$request->first_name . ' ' . $request->last_name,
            'email'=>$request->email,
            'address'=>$request->address,
            'payment_method'=>$request->paymentMethod,
            'total'=>array_sum(array_column($myCart,'sub_total')),
          ]);
  
  
          //order details create
          foreach($myCart as $key=>$cart)
          {
            
            OrderDetail::create([
              'order_id'=>$order->id,
              'product_id'=>$key,
              'price'=>$cart['price'],
              'qty'=>$cart['quantity'],
              'subtotal'=>$cart['sub_total'],
            ]);
  
          }
          DB::commit();
          return redirect()->back()->with('msg','Order Place success.');
      }catch(Throwable $e)
      {
        DB::rollBack();
        return redirect()->back()->with('msg','Something went wrong');

      }
     

     

    }
    
}
