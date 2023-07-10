@extends('backend.master')

@section('content')

<h1>Create new product</h1>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
               <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif

    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf

       <div class="form-group">
           <label for="">Enter Product Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="product_name" placeholder="Enter Product Name">
       </div>

        <div class="form-group">
            <label for="">Enter Product Description</label>
            <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
        </div>


        <div class="form-group">
            <label for="a">Select Category</label>
           <select class="form-control" name="category_id" id="a">
            
           @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
           
            @endforeach
           
        </select>
        </div>


        <div class="form-group">
           <label for="">Upload Image</label>
           <input  type="file" class="form-control" required name="product_image" placeholder="Enter Product image">
       </div>

       <div class="form-group">
           <label for="">Enter Price</label>
           <input min='100' type="number" class="form-control" required name="product_price" placeholder="Enter Product Price">
       </div>
       <div class="form-group">
           <label for="">Enter Stock</label>
           <input min='10' type="number" class="form-control" required name="product_stock" placeholder="Enter Product Stock">
       </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection