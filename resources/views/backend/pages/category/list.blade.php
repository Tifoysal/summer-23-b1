@extends('backend.master')


@section('content')

<h1>Categories</h1>


<a href="{{route('category.create.form')}}" class="btn btn-success">Create</a>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $cat)
        <tr>
            <th scope="row">{{$cat->id}}</th>
            <td>{{$cat->name}}</td>
            <td>{{$cat->status}}</td>
            <td>{{$cat->description}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
