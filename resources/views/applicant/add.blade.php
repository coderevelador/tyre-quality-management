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
                        <h4 class="card-title">Add Applicant</h4>
                        <form method="post" action="{{ route('store_applicant') }}">
                            @csrf
                            <div class="form-group">
                                <label>Applicant Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Applicant Name">
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Landmark</label>
                                <input type="text" class="form-control" name="landmark" placeholder="Enter Landmark">
                            </div>
                            @error('landmark')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter City">
                            </div>
                            @error('city')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" name="state" placeholder="Enter State">
                            </div>
                            @error('state')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Enter Country">
                            </div>
                            @error('country')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Pin Code</label>
                                <input type="number" class="form-control" name="pincode" placeholder="Enter Pincode">
                            </div>
                            @error('pincode')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <button type="submit" class="btn btn-primary">Add Applicant</button>
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
