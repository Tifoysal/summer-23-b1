<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function list()
    {

        $orders=Order::with('customer')->get();
        // dd($orders);
        return view('backend.pages.order.list',compact('orders'));
    }

    public function view($id)
    {
        $order_items=OrderDetail::with('product')->where('order_id',$id)->get();


        return view('backend.pages.order.details',compact('order_items'));
       
    }
}
