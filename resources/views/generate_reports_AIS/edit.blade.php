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
                                Edit Generated Report AIS
                                <!--Padding is optional-->
                            </span>
                        </div><br>

                        <form method="post" action="{{ route('update_reports_ais', $generate_reports->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>HTAC No.</label>
                                    <input type="text" class="form-control" name="htac"
                                        value="{{ $generate_reports->htac }}" required>
                                </div>
                                @error('htac')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>ULR No. </label>
                                    <input type="text" class="form-control" name="ulr"
                                        value="{{ $generate_reports->ulr }}" required>
                                </div>
                                @error('ulr')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Date of Test</label>
                                <input type="date" class="form-control" name="date_of_test" required
                                    value="{{ $generate_reports->date_of_test }}">
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
                                        <option value="{{ $machine->id }}"
                                            {{ $machine->id == $generate_reports->test_machine_details_id ? 'selected' : '' }}>
                                            {{ $machine->name }}</option>
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
                                        <option value="{{ $app->id }}"
                                            {{ $app->id == $generate_reports->applicant_id ? 'selected' : '' }}>
                                            {{ $app->name }}</option>
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
                                        placeholder="Size of Sample" required
                                        value="{{ $generate_reports->size_of_sample }}">
                                </div>
                                @error('size_of_sample')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Manufacturer </label>
                                    <input type="text" class="form-control" name="manufacturer"
                                        placeholder="Manufacturer" required value="{{ $generate_reports->manufacturer }}">
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
                                        required value="{{ $generate_reports->trade_mark }}">
                                </div>
                                @error('trade_mark')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Sample Quantity </label>
                                    <input type="text" class="form-control" name="sample_quantity"
                                        placeholder="Sample Quantity" required
                                        value="{{ $generate_reports->sample_quantity }}">
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
                                    <input type="text" class="form-control" name="pattern" placeholder="Pattern" required
                                        value="{{ $generate_reports->pattern }}">
                                </div>
                                @error('pattern')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Category of Use </label>
                                    <input type="text" class="form-control" name="category_of_use"
                                        placeholder="Category of Use" required
                                        value="{{ $generate_reports->category_of_use }}">
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
                                    <input type="text" class="form-control" name="sl_no" placeholder="Sl.No."
                                        required value="{{ $generate_reports->sl_no }}">
                                </div>
                                @error('sl_no')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Tyre Class </label>
                                    <input type="text" class="form-control" name="tyre_class"
                                        placeholder="Tyre Class" required value="{{ $generate_reports->tyre_class }}">
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
                                        required value="{{ $generate_reports->test_rim }}">
                                </div>
                                @error('test_rim')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Standard </label>
                                    <input type="text" class="form-control" name="test_standard"
                                        placeholder="Test Standard" required
                                        value="{{ $generate_reports->test_standard }}">
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
                                        placeholder="Test Inflation Pressure(kPa)" required
                                        value="{{ $generate_reports->test_inflation_pressure }}">
                                </div>
                                @error('test_inflation_pressure')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Method </label>
                                    <input type="text" class="form-control" name="test_method"
                                        placeholder="Test Method" required value="{{ $generate_reports->test_method }}">
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
                                        placeholder="Test Load(kg)" required value="{{ $generate_reports->test_load }}">
                                </div>
                                @error('test_load')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Reference Amb Temperature(°C) </label>
                                    <input type="text" class="form-control" name="reference_amb_temperature"
                                        placeholder="Reference Amb Temperature(°C)" required
                                        value="{{ $generate_reports->reference_amb_temperature }}">
                                </div>
                                @error('reference_amb_temperature')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>SKIM Load(kg)</label>
                                    <input type="text" class="form-control" name="skim_load"
                                        value="{{ $generate_reports->skim_load }}" required>
                                </div>
                                @error('skim_load')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Rim Material </label>
                                    <input type="text" class="form-control" name="test_rim_material"
                                        value="{{ $generate_reports->test_rim_material }}" required>
                                </div>
                                @error('test_rim_material')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Test Speed(KMPH)</label>
                                    <input type="text" class="form-control" name="test_speed"
                                        placeholder="Test Speed(KMPH)" required
                                        value="{{ $generate_reports->test_speed }}">
                                </div>
                                @error('test_speed')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Temperature Correction </label>
                                    <input type="text" class="form-control" name="temperature_correction"
                                        placeholder="Temperature Correction " required
                                        value="{{ $generate_reports->temperature_correction }}">
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
                                        <option value="drum_surface_value"
                                            {{ $generate_reports->drum_surface_label == 'drum_surface_value' ? 'selected' : '' }}>
                                            Drum Surface</option>
                                        <option value="road_surface_value"
                                            {{ $generate_reports->drum_surface_label == 'road_surface_value' ? 'selected' : '' }}>
                                            Road Surface</option>
                                    </select> <br>
                                    <input type="text" class="form-control" name="drum_surface"
                                        placeholder="Drum Surface" required
                                        value="{{ $generate_reports->drum_surface }}">
                                </div>
                                @error('drum_surface')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <select name="drum_diameter_label" id="drumDiameterLabel" class="form-control">
                                        <option value="drum_diameter_value"
                                            {{ $generate_reports->drum_diameter_label == 'drum_diameter_value' ? 'selected' : '' }}>
                                            Drum Diameter/m</option>
                                        <option value="proving_ground_value"
                                            {{ $generate_reports->drum_diameter_label == 'proving_ground_value' ? 'selected' : '' }}>
                                            Proving Ground</option>
                                    </select><br>
                                    <input type="text" class="form-control" name="drum_diameter"
                                        placeholder="Drum Diameter/m" required
                                        value="{{ $generate_reports->drum_diameter }}">
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
                                <div class="form-group col-md-6">
                                    <label>Thermal Conditioning</label>
                                    <input type="text" class="form-control" name="thermal_conditioning"
                                        placeholder="Thermal Conditioning" required
                                        value="{{ $generate_reports->thermal_conditioning }}">
                                </div>
                                @error('thermal_conditioning')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>rL/mm </label>
                                    <input type="text" class="form-control" name="thermal_conditioning_rl_mm"
                                        value="{{ $generate_reports->thermal_conditioning_rl_mm }}">
                                </div>
                                @error('thermal_conditioning_rl_mm')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Initial Test Inflation/kPa</label>
                                    <input type="text" class="form-control" name="inital_test_inflation"
                                        placeholder="Initial Test Inflation/kPa" required
                                        value="{{ $generate_reports->inital_test_inflation }}">
                                </div>
                                @error('inital_test_inflation')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Final Test Inflation/kPa </label>
                                    <input type="text" class="form-control" name="final_test_inflation"
                                        placeholder="Final Test Inflation/kPa" required
                                        value="{{ $generate_reports->final_test_inflation }}">
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
                                        placeholder="Test Speed/kmph" required
                                        value="{{ $generate_reports->test_speed_result }}">
                                </div>
                                @error('test_speed_result')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Ambient Temperature/°C </label>
                                    <input type="text" class="form-control" name="ambient_temperature"
                                        placeholder="Ambient Temperature/°C" required
                                        value="{{ $generate_reports->ambient_temperature }}">
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
                                        placeholder="Warm Up Duration/min" required
                                        value="{{ $generate_reports->warm_up_duration }}">
                                </div>
                                @error('warm_up_duration')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Tyre Weight/kg </label>
                                    <input type="text" class="form-control" name="tyre_weight"
                                        placeholder="Tyre Weight/kg " required
                                        value="{{ $generate_reports->tyre_weight }}">
                                </div>
                                @error('tyre_weight')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Initial Rolling Resistance Coeffiecient N/kN</label>
                                    <input type="text" class="form-control"
                                        name="initial_rolling_resistance_coeffecient"
                                        value="{{ $generate_reports->initial_rolling_resistance_coeffecient }}" required>
                                </div>
                                @error('initial_rolling_resistance_coeffecient')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <select name="rolling_resistance_label" id="RollingResistanceLabel"
                                        class="form-control">
                                        <option value="rolling_resistance_value"
                                            {{ $generate_reports->rolling_resistance_label == 'rolling_resistance_value' ? 'selected' : '' }}>
                                            Rolling Resistance Coeffiecient (25°C, 2m)
                                            N/kN
                                        </option>
                                        <option value="rolling_resistance_value_1.7"
                                            {{ $generate_reports->rolling_resistance_label == 'rolling_resistance_value_1.7' ? 'selected' : '' }}>
                                            Rolling resistance coefficient-AIS-142,Annex-D(25°C,1.7m)N/kN
                                        </option>
                                        <option value="sound_level_value"
                                            {{ $generate_reports->rolling_resistance_label == 'sound_level_value' ? 'selected' : '' }}>
                                            Sound level according to AIS-142 of Annex-A(dBA)
                                        </option>
                                        <option value="wet_grip_value"
                                            {{ $generate_reports->rolling_resistance_label == 'wet_grip_value' ? 'selected' : '' }}>
                                            Wet grip Index according to AIS-142 of Annex-C
                                        </option>
                                    </select> <br>
                                    <input type="text" class="form-control"
                                        name="temp_corrected_rolling_resistance_coeffecient"
                                        value="{{ $generate_reports->temp_corrected_rolling_resistance_coeffecient }}"
                                        id="rollingResistanceValue" required>
                                </div>
                                @error('temp_corrected_rolling_resistance_coeffecient')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label>Temperature & Drum Diameter Corrected Rolling Resistance Coeffiecient (25°C, 2m)
                                    N/kN</label>
                                <input type="text" class="form-control"
                                    name="temp_diameter_corrected_rolling_resistance_coeffecient"
                                    value="{{ $generate_reports->temp_diameter_corrected_rolling_resistance_coeffecient }}"
                                    required>
                            </div>
                            @error('temp_diameter_corrected_rolling_resistance_coeffecient')
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
                                    <input type="text" class="form-control" name="approved_by" required
                                        value="{{ $generate_reports->approved_by }}">
                                </div>
                                @error('approved_by')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="form-group col-md-6">
                                    <label>Test Witnessed</label>
                                    <input type="text" class="form-control" name="test_witnessed"
                                        value="{{ $generate_reports->test_witnessed }}" required>
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
                                            <option value="{{ $sign->signature }}"
                                                {{ $generate_reports->signature == $sign->signature ? 'selected' : '' }}>
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
                                    <img id="image-preview"
                                        src="{{ asset('images/signature/' . $generate_reports->signature) }}"
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
                                    <option value="PDF Generated"
                                        {{ $generate_reports->status == 'PDF Generated' ? 'selected' : '' }}>
                                        PDF Generated</option>
                                    <option value="Hard copy send for approval"
                                        {{ $generate_reports->status == 'Hard copy send for approval' ? 'selected' : '' }}>
                                        Hard copy send for approval</option>
                                    <option value="Rejected by the authority"
                                        {{ $generate_reports->status == 'Rejected by the authority' ? 'selected' : '' }}>
                                        Rejected by the authority</option>
                                    <option value="Approved by the authority"
                                        {{ $generate_reports->status == 'Approved by the authority' ? 'selected' : '' }}>
                                        Approved by the authority</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Update Generated Report</button>
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
