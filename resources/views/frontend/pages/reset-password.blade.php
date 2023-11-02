@extends('frontend.master')


@section('content')

<h1>Customer reset password</h1>

<form action="{{route('reset.password',$token)}}" method="post">
  @csrf

  <div class="form-group">
    <label for="exampleInputPassword1">Enter New Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Retype Password</label>
    <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>





@endsection