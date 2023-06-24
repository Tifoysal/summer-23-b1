@extends('backend.master')

@section('content')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
               <p class="alert alert-danger"> {{$error}}</p>
            </div>
        @endforeach
    @endif
    <form action="{{route('brand.store')}}" method="post">
        @csrf

       <div class="form-group">
           <label for="">Enter Brand Name</label>
           <input  type="text" class="form-control" required name="brand_name" placeholder="Enter Brand Name">
       </div>

        <div class="form-group">
            <label for="">Enter Brand Description</label>
            <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
             </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
