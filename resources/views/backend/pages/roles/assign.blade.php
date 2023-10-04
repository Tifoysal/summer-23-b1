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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            All
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            View
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Insert
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Update
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Delete
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- card1 end --}}

        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card">
                {{-- <div class="card-header">Card 1</div> --}}
                <div class="card-body">
                    Manager
                </div>
                <div class="card-footer">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            All
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            View
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Insert
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Update
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                        <label class="form-check-label" for="checkbox1">
                            Delete
                        </label>
                    </div>
                </div>
            </div>
        </div>
         {{-- card 2 end --}}
    </div>
</div>


@endsection
