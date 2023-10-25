@extends('backend.master')

@section('content')
<h1>All Products</h1>

@if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif

<a href="{{route('product.create.form')}}" class="btn btn-success">Create New Product</a>

<table class="productTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>



  </tbody>
</table>




@endsection


@push('js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(function () {
   
    var table = $('.productTable').DataTable({
        processing: true,
        serverSide: false,
        ajax: "{{ route('product.ajaxProduct') }}",
        
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name',searchable:true},
            {data: 'price', name: 'price'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
  
@endpush