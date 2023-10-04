@extends('backend.master')


@section('content')


   <div class="container">
    <h1 class="text-center"><strong>Role Create Form</strong></h1>
    <hr>

    @if(session()->has('msg'))
    <p class="alert alert-success"> {{session()->get('msg')}}</p>
    @endif
    
   <form action="{{route('role.store')}}" method="post">
        @csrf

        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif

        <div class="form-group mb-3">
            <label for="">Name</label>
            <input name="role_name" type="text" class="form-control" id="" placeholder="Enter role name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>


@endsection
