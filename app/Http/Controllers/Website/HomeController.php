<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
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

      
       Toastr::success('Product Added to Cart.');
       return redirect()->back();


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
            'payment_status'=>'pending',
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

          if($request->paymentMethod == 'ssl')
          {
            
            // redirect to payment page
            $this->payNow($order);
          }
          Toastr::success('Order Placed.');
          return redirect()->back();
      }catch(Throwable $e)
      {
        DB::rollBack();
        Toastr::error('Something went wrong.');
        return redirect()->back();

      }

    }


    public function payNow($orderData)
    {
        $post_data = array();
        $post_data['total_amount'] = $orderData->total; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $orderData->id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $orderData->name;
        $post_data['cus_email'] = $orderData->email;
        $post_data['cus_add1'] = $orderData->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";



        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
    
}
