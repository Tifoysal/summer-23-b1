@extends('backend.master')


@section('content')


    <form action="{{route('category.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input name="category_name" type="text" class="form-control" id="" placeholder="Enter category name">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea  class="form-control" placeholder="Enter description" name="description" id="" cols="" rows=""></textarea>

        </div>

        <div class="form-group">
            <label for="">Upload Image</label>
            <input type="file" placeholder="upload image" class="form-control">

        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
