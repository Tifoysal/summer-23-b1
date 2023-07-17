@extends('frontend.master')


@section('content')

<h1>Customer Registration</h1>

<form action="{{route('customer.store')}}" method="post">
    @if($errors->any())

    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach 

    @endif

@csrf

<div class="form-group">
    <label for="exampleInputEmail1">Enter Name</label>
    <input name="name" type="text" class="form-control" id=""  placeholder="Enter name">
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection