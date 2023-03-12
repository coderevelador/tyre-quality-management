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
                        <h4 class="card-title">Generated ASI Reports</h4>
                        <div class="col-xs-12" style="float:right;">
                            <div class="row">
                                <div class="col-xs-6">
                                    <form action="{{ route('all_reports_AIS') }}" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="start_date">
                                            <input type="date" class="form-control" name="end_date">
                                            <button class="btn btn-primary" type="submit">GET</button>
                                        </div>
                                    </form>
                                </div>
                                &nbsp;
                                <div class="col-xs-6">
                                    <form action="{{ route('all_reports_AIS') }}" method="get">
                                        <select name="filter_value" id="filter_select" class="form-control">
                                            <option value="">Select Days</option>
                                            <option value="7days">Last 7 Days</option>
                                            <option value="30days">Last 30 Days</option>
                                            <option value="90days">Last 90 Days</option>
                                            <option value="all">All Data</option>
                                        </select>
                                </div>
                                &nbsp;
                                &nbsp;
                                <div class="col-xs-6">
                                    <form action="{{ route('all_reports_AIS') }}" method="get">
                                        <select name="filter_status" id="filter_select" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="PDF">PDF Generated</option>
                                            <option value="Hard copy send for approval">Hard copy send for approval</option>
                                            <option value="Rejected by the authority">Rejected by the authority</option>
                                            <option value="Approved by the authority">Approved by the authority</option>
                                            <option value="">All</option>
                                        </select>
                                </div>
                                &nbsp;
                                <div class="col-xs-6">
                                    <button type="submit" id="filter_button" class="btn btn-primary">Filter</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration" data-ordering='false' id="data_table">
                                <thead>
                                    <tr>
                                        <th>Sl. No.</th>
                                        <th>Status</th>
                                        <th>Date of Test</th>
                                        <th>Test Machine</th>
                                        <th>Applicant</th>
                                        <th>Approved By</th>
                                        <th>Test Witnessed</th>
                                        <th>Reports</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($generate_reports as $generate_report)
                                        <tr>
                                            <td>{{ $generate_report->id }}</td>
                                            <td>
                                                <span
                                                    class="label label-@if ($generate_report->status == 'PDF Generated')primary @elseif($generate_report->status == 'Hard copy send for approval')info @elseif($generate_report->status == 'Rejected by the authority')danger @elseif($generate_report->status == 'Approved by the authority')success @endif
                                                ">{{ $generate_report->status }}</span>
                                            </td>
                                            <td>{{ $generate_report->date_of_test }}</td>
                                            <td>{{ $generate_report->TestMachine->name }}</td>
                                            <td>{{ $generate_report->Applicant->name }}</td>
                                            <td>{{ $generate_report->approved_by }}</td>
                                            <td>{{ $generate_report->test_witnessed }}</td>
                                            <td> <a href="{{ route('pdf_ais', $generate_report->id) }}" class="btn btn-info }}"
                                                    style="color:white;">PDF</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_reports_ais', $generate_report->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('delete_reports_ais', $generate_report->id) }}"
                                                    class="btn btn-danger }}" style="color:white;">Delete</a>

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



        // $(document).ready(function() {
        //     $('#filter_button').click(function() {
        //         var filter_value = $('#filter_select').val();
        //         $.ajax({
        //             type: 'GET',
        //             url: '{{ route('all_reports') }}',
        //             data: {
        //                 filter_value: filter_value
        //             },
        //             success: function(data) {
        //                 $('#data_table tbody').html(data);
        //             }
        //         });
        //     });
        // });
    </script>
@endsection
<!--**********************************
        Content body end
***********************************-->
