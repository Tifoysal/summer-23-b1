@extends('backend.master')


@section('content')

<h1>Assign permission to role: {{ucfirst($role->name)}}</h1>

<body>
    <div class="container mt-5">
        <div class="row">

            <!-- Card 1 -->
            <div class="col-md-3 mb-4">

                <form action="{{route('assign.permission',$role->id)}}" method="post">
                    @csrf
                    <div class="card">
                        {{-- <div class="card-header">Card 1</div> --}}
                        <div class="card-body">
                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                                Check all Permissions
                            </label>
                        </div>
                        <div class="card-footer">

                            @foreach ($permissions as $permission)
                            <div class="form-check">
                                <input name="permission[]" @if(in_array($permission->id,$assignedPermissions)) checked  @endif
                                class="form-check-input" type="checkbox" value="{{$permission->id}}" id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                    {{ ucfirst($permission->name) }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Assign permission</button>
                </form>
            </div>



        </div>
    </div>


    @endsection