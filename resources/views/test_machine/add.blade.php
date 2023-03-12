@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body col-6">
                        <h4 class="card-title">Add Test Machine</h4>
                        <form method="post" action="{{ route('store_test_machine') }}">
                            @csrf

                            <div class="form-group">
                                <label>Machine Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Machine Name">
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Serial No.</label>
                                <input type="text" class="form-control" name="serial_no" placeholder="Enter Serial No">
                            </div>
                            @error('serial_no')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Add Machine</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    </div>
@endsection
<!--**********************************
        Content body end
***********************************-->
