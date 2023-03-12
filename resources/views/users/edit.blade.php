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
                        <form method="post" action="{{ route('update_user', $user->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="is_admin[]"
                                    {{ $user->is_admin ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleCheck1">Is Admin?</label>
                            </div><br>
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
