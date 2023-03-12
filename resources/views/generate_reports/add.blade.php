@extends('layouts.app')
<!--**********************************
            Content body start
***********************************-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body col-md-8">

                        <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                            <span style="font-size: 30px; background-color: #ffffff; padding: 0 10px;">
                                Generate Reports
                                <!--Padding is optional-->
                            </span>
                        </div><br>

                        <form method="post" action="{{ route('store_reports') }}">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>HTAC No.</label>
                                    <input type="text" class="form-control" name="htac"
                                        placeholder="HTAC No." required>
                                </div>
                                @error('htac')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>ULR No. </label>
                                    <input type="text" class="form-control" name="ulr"
                                        placeholder="ULR No." required>
                                </div>
                                @error('ulr')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Date of Test</label>
                                <input type="date" class="form-control" name="date_of_test" required>
                            </div>
                            @error('date_of_test')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Select Test Machine</label>
                                <select type="text" class="form-control" name="test_machine_details_id" required>
                                    @foreach ($test_machine as $machine)
                                        <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('test_machine_details_id')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Select Applicant</label>
                                <select type="text" class="form-control" name="applicant_id" required>
                                    @foreach ($applicant as $app)
                                        <option value="{{ $app->id }}">{{ $app->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('applicant_id')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror


                            {{-- Test Tyre Details --}}

                            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                                <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                                    Test Tyre Details
                                    <!--Padding is optional-->
                                </span>
                            </div><br>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Size of Sample</label>
                                    <input type="text" class="form-control" name="size_of_sample"
                                        placeholder="Size of Sample" required>
                                </div>
                                @error('size_of_sample')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Manufacturer </label>
                                    <input type="text" class="form-control" name="manufacturer"
                                        placeholder="Manufacturer" required>
                                </div>
                                @error('manufacturer')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Trade Mark</label>
                                    <input type="text" class="form-control" name="trade_mark" placeholder="Trade Mark"
                                        required>
                                </div>
                                @error('trade_mark')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Sample Quantity </label>
                                    <input type="text" class="form-control" name="sample_quantity"
                                        placeholder="Sample Quantity" required>
                                </div>
                                @error('sample_quantity')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Pattern</label>
                                    <input type="text" class="form-control" name="pattern" placeholder="Pattern"
                                        required>
                                </div>
                                @error('pattern')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Category of Use </label>
                                    <input type="text" class="form-control" name="category_of_use"
                                        placeholder="Category of Use" required>
                                </div>
                                @error('category_of_use')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Sl.No.</label>
                                    <input type="text" class="form-control" name="sl_no" placeholder="Sl.No." required>
                                </div>
                                @error('sl_no')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Tyre Class </label>
                                    <input type="text" class="form-control" name="tyre_class" placeholder="Tyre Class"
                                        required>
                                </div>
                                @error('tyre_class')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            {{-- Test data --}}


                            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                                <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                                    Test Data
                                    <!--Padding is optional-->
                                </span>
                            </div><br>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Rim</label>
                                    <input type="text" class="form-control" name="test_rim" placeholder="Test Rim"
                                        required>
                                </div>
                                @error('test_rim')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Standard </label>
                                    <input type="text" class="form-control" name="test_standard"
                                        placeholder="Test Standard" required>
                                </div>
                                @error('test_standard')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Inflation Pressure(kPa)</label>
                                    <input type="text" class="form-control" name="test_inflation_pressure"
                                        placeholder="Test Inflation Pressure(kPa)" required>
                                </div>
                                @error('test_inflation_pressure')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Method </label>
                                    <input type="text" class="form-control" name="test_method"
                                        placeholder="Test Method" required>
                                </div>
                                @error('test_method')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Load(kg)</label>
                                    <input type="text" class="form-control" name="test_load"
                                        placeholder="Test Load(kg)" required>
                                </div>
                                @error('test_load')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Reference Amb Temperature(°C) </label>
                                    <input type="text" class="form-control" name="reference_amb_temperature"
                                        placeholder="Reference Amb Temperature(°C)" required>
                                </div>
                                @error('reference_amb_temperature')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Speed(KMPH)</label>
                                    <input type="text" class="form-control" name="test_speed"
                                        placeholder="Test Speed(KMPH)" required>
                                </div>
                                @error('test_speed')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Temperature Correction </label>
                                    <input type="text" class="form-control" name="temperature_correction"
                                        placeholder="Temperature Correction " required>
                                </div>
                                @error('temperature_correction')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select name="drum_surface_label" id="drumSurfaceLabel" class="form-control">
                                        <option value="drum_surface_value">Drum Surface</option>
                                        <option value="road_surface_value">Road Surface</option>
                                    </select> <br>
                                    <input type="text" class="form-control" name="drum_surface"
                                        placeholder="Drum Surface Value" id="drum_surface_placeholder" required>
                                </div>
                                @error('drum_surface')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <select name="drum_diameter_label" id="drumDiameterLabel" class="form-control">
                                        <option value="drum_diameter_value">Drum Diameter/m</option>
                                        <option value="proving_ground_value">Proving Ground</option>
                                    </select> <br>
                                    <input type="text" class="form-control" name="drum_diameter"
                                        placeholder="Drum Diameter Value" id="drum_diameter_placeholder" required>
                                </div>
                                @error('drum_diameter')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                            {{-- Test Results --}}

                            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                                <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                                    Test Results
                                    <!--Padding is optional-->
                                </span>
                            </div><br>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Thermal Conditioning</label>
                                    <input type="text" class="form-control" name="thermal_conditioning"
                                        placeholder="Thermal Conditioning" required>
                                </div>
                                @error('thermal_conditioning')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-4">
                                    <label>Load rL(m) </label>
                                    <input type="text" class="form-control" name="thermal_conditioning_load"
                                        placeholder="Load rL(m)">
                                </div>
                                @error('thermal_conditioning_load')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-4">
                                    <label>Skim rL(m) </label>
                                    <input type="text" class="form-control" name="thermal_conditioning_skim"
                                        placeholder="Skim rL(m)">
                                </div>
                                @error('thermal_conditioning_skim')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Initial Test Inflation/kPa</label>
                                    <input type="text" class="form-control" name="inital_test_inflation"
                                        placeholder="Initial Test Inflation/kPa" required>
                                </div>
                                @error('inital_test_inflation')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Final Test Inflation/kPa </label>
                                    <input type="text" class="form-control" name="final_test_inflation"
                                        placeholder="Final Test Inflation/kPa" required>
                                </div>
                                @error('final_test_inflation')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Speed/kmph</label>
                                    <input type="text" class="form-control" name="test_speed_result"
                                        placeholder="Test Speed/kmph" required>
                                </div>
                                @error('test_speed_result')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Ambient Temperature/°C </label>
                                    <input type="text" class="form-control" name="ambient_temperature"
                                        placeholder="Ambient Temperature/°C" required>
                                </div>
                                @error('ambient_temperature')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Warm Up Duration/min</label>
                                    <input type="text" class="form-control" name="warm_up_duration"
                                        placeholder="Warm Up Duration/min" required>
                                </div>
                                @error('warm_up_duration')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Tyre Weight/kg </label>
                                    <input type="text" class="form-control" name="tyre_weight"
                                        placeholder="Tyre Weight/kg " required>
                                </div>
                                @error('tyre_weight')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group ">
                                <select name="rolling_resistance_label" id="RollingResistanceLabel" class="form-control">
                                    <option value="rolling_resistance_value">Rolling Resistance Coeffiecient (25°C, 2m)
                                        N/kN
                                    </option>
                                    <option value="sound_level_value">Sound Level According to Para 4.4.& 4.5 of Annex-3
                                    </option>
                                    <option value="wet_grip_value"> Wet Grip Index % </option>
                                </select> <br>
                                <input type="text" class="form-control" name="rolling_resistance_coeffecient"
                                    placeholder="Rolling Resistance Coeffiecient (25°C, 2m) N/kN"
                                    id="rollingResistanceValue" required>
                            </div>
                            @error('rolling_resistance_coeffecient')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                                <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                                    Approved by
                                    <!--Padding is optional-->
                                </span>
                            </div><br>
                            {{-- Approved --}}

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Approved By</label>
                                    <input type="text" class="form-control" name="approved_by"
                                        placeholder="Approved By" required>
                                </div>
                                @error('approved_by')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                                <div class="form-group col-md-6">
                                    <label>Test Witnessed</label>
                                    <input type="text" class="form-control" name="test_witnessed"
                                        placeholder="Test Witnessed" required>
                                </div>
                                @error('test_witnessed')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Select Your Signature </label>
                                    <select name="signature" id="uploaded-sign" class="form-control" required>
                                        <option value="">Select Your Signature</option>
                                        @foreach ($signature as $sign)
                                            <option value="{{ $sign->signature }}">
                                                {{ $sign->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('signature')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <img id="image-preview" src="{{ asset('images/placeholder-image.jpg') }}"
                                        alt="Selected Image" width="200px">
                                </div>
                            </div>



                            <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                                <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
                                    Test Status
                                    <!--Padding is optional-->
                                </span>
                            </div><br>
                            {{-- Status --}}



                            <div class="form-group">
                                <label>Select Status</label>
                                <select type="text" class="form-control" name="status" required>
                                    <option value="PDF Generated">PDF Generated</option>
                                    <option value="Hard copy send for approval">Hard copy send for approval</option>
                                    <option value="Rejected by the authority">Rejected by the authority</option>
                                    <option value="Approved by the authority">Approved by the authority</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Generate Report</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    </div>
    <script>
        function convertCaseAndRemoveUnderscore(value) {
            var convertedValue = value.replace(/_/g, " ");
            return convertedValue.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });
        }

        // drum surface value
        $(document).ready(function() {
            $("#drumSurfaceLabel").change(function() {
                var selectedValue = $(this).val();
                var convertedValue = convertCaseAndRemoveUnderscore(selectedValue);
                $("#drum_surface_placeholder").attr("placeholder", convertedValue);
            });
        });

        // drum diamter value
        $(document).ready(function() {
            $("#drumDiameterLabel").change(function() {
                var selectedValue = $(this).val();
                var convertedValue = convertCaseAndRemoveUnderscore(selectedValue);
                $("#drum_diameter_placeholder").attr("placeholder", convertedValue);
            });
        });

        // rolling resistance value
        $(document).ready(function() {
            $("#RollingResistanceLabel").change(function() {
                var selectedValue = $(this).val();
                var convertedValue = convertCaseAndRemoveUnderscore(selectedValue);
                $("#rollingResistanceValue").attr("placeholder", convertedValue);
            });
        });








        $(document).ready(function() {
            $("#uploaded-sign").on("change", function() {
                var selectedValue = '/images/signature/' + $(this).val();
                $("#image-preview").attr("src", selectedValue);
            });
        });
    </script>
@endsection
<!--**********************************
        Content body end
***********************************-->
