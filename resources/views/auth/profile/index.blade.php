@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->

@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <img class="mr-3" src="{{ asset('images/profile/' . $user->image) }}" width="100"
                                alt="">
                            <div class="media-body">
                                <h3 class="mb-0">{{ $user->name }}</h3>
                                <p class="text-muted mb-0">{{ $user->is_admin ? 'Administrator' : 'User' }}</p>
                            </div>
                        </div>

                        <ul class="card-profile__info">

                            <li><strong class="text-dark mr-4">Email</strong> {{ $user->email }}<span></span></li>
                        </ul>
                        <div class="col-12 text-center">
                            <a href="{{ route('profile_edit', Auth::id()) }}" class="btn btn-danger px-5">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-4">
                            <div class="media-body">
                                <h3 class="mb-0 text-center">Password Change</h3>

                            </div>
                        </div>
                        <form class="form" action="{{ route('postChangePassword', $user->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                            </div>
                            @error('current_password')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                            </div>
                            @error('new_password')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="new_password_confirmation"
                                    name="new_password_confirmation">
                            </div>
                            @error('new_password_confirmation')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary text-center">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- #/ container -->
    </div>
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
@endsection


<!--**********************************
        Content body end
***********************************-->
