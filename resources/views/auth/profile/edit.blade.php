@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->

@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Profile</h5>
                        <form method="POST" action="{{ route('profile_update', Auth::id()) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name">

                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                            </div>
                            <div class="form-group">
                                <label>Upload Your Image</label>
                                <input type="file" class="form-control" id="image-input" name="image">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('images/profile/' . $user->image) }}" id="image-preview"
                                    alt="Profile Image" width="200px">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        </form>
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

<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>


<!--**********************************
        Content body end
***********************************-->
