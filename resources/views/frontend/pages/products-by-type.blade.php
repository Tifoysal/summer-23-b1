@extends('frontend.master')

@section('content')

<h1> Products for:</h1>


<div class="tab-pane active" id="trending">


@foreach($products as $product)
    <div class="col-md-3 col-sm-4">

        <div class="single-product">

            <div class="product-block">

                <img src="{{url('/uploads/products/'.$product->image)}}" alt="" class="thumbnail">

                <div class="product-description text-center">

                    <p class="title">{{$product->name}}
                    <span class="badge badge-primary">{{$product->type}}</span>
                    </p>

                    <p class="price">{{$product->price}} BDT</p>

                </div>

                <div class="product-hover">

                    <ul>

                        <li><a href="single-product.html"><i class="fa fa-cart-arrow-down"></i></a></li>

                        <li><a href=""><i class="fa fa-arrows-h"></i></a></li>

                        <li><a href=""><i class="fa fa-heart-o"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>
@endforeach


</div>
@endsection