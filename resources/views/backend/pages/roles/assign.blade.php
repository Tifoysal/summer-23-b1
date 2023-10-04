@extends('backend.master')


@section('content')

<h1>Assign permission</h1>
<body>
<div class="container mt-5">
    <div class="row">

        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                {{-- <div class="card-header">Card 1</div> --}}
                <div class="card-body">
                    User
                </div>
                <div class="card-footer">

                @foreach ($permissions as $permission)
                    
                
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            {{ $permission->name }}
                        </label>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        {{-- card1 end --}}

       
    </div>
</div>


@endsection
