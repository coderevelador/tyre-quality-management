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
                        <h4 class="card-title">Edit User</h4>
                        <form method="post" action="{{ route('update_test_machine', $test_machine->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Machine Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $test_machine->name }}">
                            </div>
                            <div class="form-group">
                                <label>Serial No</label>
                                <input type="text" class="form-control" name="serial_no"
                                    value="{{ $test_machine->serial_no }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
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
