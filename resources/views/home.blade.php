@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"><br><br>
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome to HASETRI</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <h4> {{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card card-widget">
                    <div class="card-body gradient-3">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fa fa-file"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">{{ $count_report }}</h2>
                                <h5 class="card-widget__subtitle">No. ECE of Reports</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card card-widget">
                    <div class="card-body gradient-4">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fa fa-industry"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">{{ $count_report_asi }}</h2>
                                <h5 class="card-widget__subtitle">No. of ASI Reports</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-4">
                <div class="card card-widget">
                    <div class="card-body gradient-9">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fa fa-building"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title">{{ $count_applicant }}</h2>
                                <h5 class="card-widget__subtitle">No. of Applicant</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="fa fa-paste gradient-3-text"></i></span>
                            <h2 class="mt-3">Generate Reports ECE</h2>
                            <p>Manage all reports</p><a href="{{ route('all_reports') }}"
                                class="btn gradient-3 btn-lg border-0 btn-rounded px-5">
                                Goto Reports</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="fas fa-file-alt gradient-4-text"></i></span>
                            <h2 class="mt-3">Generate Reports ASI</h2>
                            <p>Manage all reports</p>
                            <a href="{{ route('all_reports_AIS') }}"
                                class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Goto Reports</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <span class="display-5"><i class="fa fa-sitemap gradient-9-text"></i></span>
                            <h2 class="mt-3">Applicant</h2>
                            <p>Manage all applicants</p><a href="{{ route('all_applicant') }}"
                                class="btn gradient-9 btn-lg border-0 btn-rounded px-5">View
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
