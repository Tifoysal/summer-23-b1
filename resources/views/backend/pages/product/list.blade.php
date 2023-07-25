@extends('backend.master')

@section('content')
<h1>All Products</h1>

@if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif

<a href="{{route('product.create.form')}}" class="btn btn-success">Create New Product</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  @foreach($productsCollection as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->bou->name}}</td>
      <td>
        <img style="width: 50px;" src="{{url('/uploads/products/'.$product->image)}}" alt="">
      </td>
      <td>{{$product->price}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->status}}</td>
      <td>
        <a class="btn btn-primary"  href="">View</a>
        <a class="btn btn-warning"  href="{{route('product.edit',$product->id)}}">Edit</a>
        <a  class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
