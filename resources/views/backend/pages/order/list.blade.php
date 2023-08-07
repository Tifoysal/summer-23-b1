@extends('backend.master')


@section('content')
<h1> Order List</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Order Date</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($orders as $order)
    <tr>
      <th scope="row">1</th>
      <td>{{$order->customer->name}}</td>
      <td>{{$order->created_at}}</td>
      <td>{{$order->total}}</td>
      <td>{{$order->payment_method}}</td>
      <td>
        <a href="{{route('order.view',$order->id)}}" class="btn btn-success">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
