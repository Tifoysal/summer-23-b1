@extends('backend.master')


@section('content')

<h1 class="text-center"><strong>Role Lists</strong></h1>
<hr>

<a href="{{route('role.create')}}" class="btn btn-outline-success">+Add Role</a>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($allList as $list=>$item)
            <tr>
                <td>{{++$list}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->status}}</td>
                <td>
                    <a href="{{route('role.assign')}}" class="btn btn-secondary">Assign</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

   {{$allList->links()}}

@endsection
