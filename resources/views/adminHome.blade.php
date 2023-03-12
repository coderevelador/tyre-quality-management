@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->

@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">All Users</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $count_users }}</h2>
                            <p class="text-white mb-0"><a style="color:white" href="{{ route('all_users') }}">View All</a></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">All ECE Reports</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $count_report }}</h2>
                            <p class="text-white mb-0"><a style="color:white" href="{{ route('all_reports') }}">View All</a>
                            </p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">All ASI Reports</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $count_report_asi }}</h2>
                            <p class="text-white mb-0"><a style="color:white" href="{{ route('all_reports_AIS') }}">View
                                    All</a></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fas fa-file-alt"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">All Test Machine</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $count_machine }}</h2>
                            <p class="text-white mb-0"><a style="color:white" href="{{ route('all_test_machine') }}">View
                                    All</a></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-industry"></i></span>
                    </div>
                </div>
            </div>
       
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 style="color: rgb(99, 99, 99)">Recently Generated ECE Reports</h3>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date of Test</th>
                                            <th>Test Machine</th>
                                            <th>Applicant</th>
                                            <th>Approved By</th>
                                            <th>Test Witnessed</th>
                                            <th>Reports</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($generate_reports as $generate_report)
                                            <tr>
                                                <td>{{ $generate_report->date_of_test }}</td>
                                                <td>{{ $generate_report->TestMachine->name }}</td>
                                                <td>{{ $generate_report->Applicant->name }}</td>
                                                <td>{{ $generate_report->approved_by }}</td>
                                                <td>{{ $generate_report->test_witnessed }}</td>
                                                <td><i class="fa fa-circle-o text-success  mr-2"></i> <a
                                                        href="{{ route('pdf1', $generate_report->id) }}"
                                                        style="">PDF</a></td>
                                                <td>
                                                    <span
                                                        class="label label-@if ($generate_report->status == 'PDF Generated')primary @elseif($generate_report->status == 'Hard copy send for approval')info @elseif($generate_report->status == 'Rejected by the authority')danger @elseif($generate_report->status == 'Approved by the authority')success @endif
                                                            ">{{ $generate_report->status }}</span>
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
{{-- recent asi reports --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 style="color: rgb(99, 99, 99)">Recently Generated ASI Reports</h3>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date of Test</th>
                                            <th>Test Machine</th>
                                            <th>Applicant</th>
                                            <th>Approved By</th>
                                            <th>Test Witnessed</th>
                                            <th>Reports</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($generate_reports_asi as $generate_report)
                                            <tr>
                                                <td>{{ $generate_report->date_of_test }}</td>
                                                <td>{{ $generate_report->TestMachine->name }}</td>
                                                <td>{{ $generate_report->Applicant->name }}</td>
                                                <td>{{ $generate_report->approved_by }}</td>
                                                <td>{{ $generate_report->test_witnessed }}</td>
                                                <td><i class="fa fa-circle-o text-success  mr-2"></i> <a
                                                        href="{{ route('pdf_ais', $generate_report->id) }}"
                                                        style="">PDF</a></td>
                                                <td>
                                                    <span
                                                        class="label label-@if ($generate_report->status == 'PDF Generated')primary @elseif($generate_report->status == 'Hard copy send for approval')info @elseif($generate_report->status == 'Rejected by the authority')danger @elseif($generate_report->status == 'Approved by the authority')success @endif
                                                            ">{{ $generate_report->status }}</span>
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
