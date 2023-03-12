@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Users</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->is_admin ? 'Admin' : 'User' }}</td>

                                            <td><img src="{{ asset('images/profile/' . $user->image) }}" alt="Image"
                                                    width="50px"></td>
                                            <td>
                                                <form action="{{ route('status_user', $user->id) }}" method="POST">
                                                    @csrf
                                                    @if ($user->status == 0)
                                                        <button type="submit"
                                                            class="btn mb-1 btn-rounded btn-success">Enable<span
                                                                class="btn-icon-right"><i
                                                                    class="fa fa-thumbs-down color-success"></i>
                                                            </span></button>
                                                    @else
                                                        <button type="submit" class="btn mb-1 btn-rounded btn-warning"><span
                                                                class="btn-icon-left"><i
                                                                    class="fa fa-thumbs-up color-danger"></i>
                                                            </span>Disable</button>
                                                    @endif
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_user', $user->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('delete_user', $user->id) }}"
                                                    class="btn btn-danger delete_button {{ $user->is_admin == 1 ? 'disabled' : '' }}"
                                                    style="color:white;">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
