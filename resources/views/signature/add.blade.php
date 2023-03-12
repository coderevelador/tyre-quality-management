@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body col-8">
                        <h4 class="card-title">Upload Signature</h4>
                        <form method="post" action="{{ route('store_signature') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter User Name"
                                    required>
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label>Upload Your Signature (Width:400px, Height:400px)</label>
                                <input type="file" class="form-control" id="image-input" name="signature">
                            </div>
                            @error('signature')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <img id="image-preview" src="{{ asset('images/placeholder-image.jpg') }}"
                                    alt="Uploaded Image" width="200px" height="200px">
                            </div>

                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                            <button type="submit" class="btn btn-primary">Upload Signature</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    </div>
    <script>
        $(document).ready(function() {
            $("#image-input").on("change", function() {
                var input = this;
                var url = URL.createObjectURL(input.files[0]);
                $("#image-preview").attr("src", url);
            });
        });
    </script>
@endsection
<!--**********************************
        Content body end
***********************************-->
