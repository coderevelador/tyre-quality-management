<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Generated On: {{ $report->date }}-<?php echo time(); ?></title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body col-md-8">
                        <header class="clearfix">
                            <div id="header-image">
                                <img src="{{ asset('images/generate_reports/header_ais.png') }}" />
                            </div>
                            <table id="qrcode">
                                <thead id="qrcode">
                                    <tr id="qrcode">
                                        <td id="qrcode">
                                            <div id="logo">
                                                {{-- <img src="data:image/png;base64, {{ $qrcode }}"
                                alt="testimage" /> --}}
                                                {!! QrCode::format('svg')->size(100)->errorCorrection('H')->generate($qrcode) !!}

                                            </div>
                                            <h3 style="text-align: center;">
                                                HTAC NO: {{ $report->htac }}
                                            </h3>
                                        </td>
                                        <td id="qrcode">
                                            <h2 style="text-align: center;">
                                                {{ $report->title }}
                                            </h2>
                                            <h3 style="text-align: center;">
                                                NABL ACCREDITATION CERTIFICATE NO.
                                            </h3>
                                        </td>
                                        <td id="qrcode">
                                            <h4 style="text-align: center;">ULR: {{ $report->ulr }} </h4>
                                        </td>
                                    </tr>
                            </table>

                        </header>

                        <main>
                            <table>

                                <tr>
                                    <td style="width: 100%"><b>1. DATE OF TEST</b></td>
                                    <td style="width: 100%">{{ $report->date_of_test }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%"><b>2. TEST MACHINE DETAILS</b></td>
                                    <td style="width: 100%">{{ $report->TestMachine->name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%"><b>3. APPLICANT</b></td>
                                    <td style="width: 100%">{{ $report->applicant->name }}</td>
                                </tr>
                            </table>
                            <h3>4. TEST TYRE DETAILS</h3>
                            <table>
                                <tr>
                                    <td style="width: 100%">SIZE OF SAMPLE</td>
                                    <td style="width: 100%">{{ $report->size_of_sample }}</td>
                                    <td style="width: 100%">MANUFACTURER</td>
                                    <td style="width: 100%">{{ $report->manufacturer }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">TRADE MARK</td>
                                    <td style="width: 100%">{{ $report->trade_mark }}</td>
                                    <td style="width: 100%">SAMPLE QUANTITY</td>
                                    <td style="width: 100%">{{ $report->sample_quantity }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">PATTERN</td>
                                    <td style="width: 100%">{{ $report->pattern }}</td>
                                    <td style="width: 100%">CATEGORY OF USE</td>
                                    <td style="width: 100%">{{ $report->category_of_use }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">SL. NO.</td>
                                    <td style="width: 100%">{{ $report->sl_no }}</td>
                                    <td style="width: 100%">TYRE CLASS</td>
                                    <td style="width: 100%">{{ $report->tyre_class }}</td>
                                </tr>
                            </table>

                            <h3>5. TEST DATA</h3>
                            <table>
                                <tr>
                                    <td style="width: 100%">TEST RIM</td>
                                    <td style="width: 100%">{{ $report->test_rim }}</td>
                                    <td style="width: 100%">TEST STANDARD</td>
                                    <td style="width: 100%">{{ $report->test_standard }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">TEST INFLATION PRESSURE (kPa)</td>
                                    <td style="width: 100%">{{ $report->test_inflation_pressure }}</td>
                                    <td style="width: 100%">TEST METHOD</td>
                                    <td style="width: 100%">{{ $report->test_method }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">TEST LOAD (kg)</td>
                                    <td style="width: 100%">{{ $report->test_load }}</td>
                                    <td style="width: 100%">REFERENCE AMB. TEMPERATURE (°C)</td>
                                    <td style="width: 100%">{{ $report->reference_amb_temperature }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">SKIM LOAD (kg)</td>
                                    <td style="width: 100%">{{ $report->skim_load }}</td>
                                    <td style="width: 100%">TEST RIM MATERIAL</td>
                                    <td style="width: 100%">{{ $report->test_rim_material }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">TEST SPEED (KMPH)</td>
                                    <td style="width: 100%">{{ $report->test_speed }}</td>
                                    <td style="width: 100%">TEMPERATURE CORRECTION</td>
                                    <td style="width: 100%">{{ $report->temperature_correction }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">
                                        {{ $report->drum_surface_label == 'drum_surface_value' ? 'DRUM SURFACE' : 'ROAD SURFACE' }}
                                    </td>
                                    <td style="width: 100%">{{ $report->drum_surface }}</td>
                                    <td style="width: 100%">
                                        {{ $report->drum_diameter_label == 'drum_diameter_value' ? 'DRUM DIAMETER/M' : 'PROVING GROUND' }}
                                    </td>
                                    <td style="width: 100%">{{ $report->drum_diameter }}</td>
                                </tr>
                            </table>
                            <h3>6. TEST RESULTS</h3>
                            <table>
                                <tr>
                                    <td style="width: 100%">THERMAL CONDITIONING</td>
                                    <td style="width: 100%">{{ $report->thermal_conditioning }}</td>
                                    <td style="width: 100%">rL/mm</td>
                                    <td style="width: 100%">{{ $report->thermal_conditioning_rl_mm }}</td>
                                </tr>

                                <tr>
                                    <td style="width: 100%">INITIAL TEST INFLATION /kPa</td>
                                    <td style="width: 100%">{{ $report->inital_test_inflation }}</td>
                                    <td style="width: 100%">FINAL TEST INFLATION /kPa</td>
                                    <td style="width: 100%">{{ $report->final_test_inflation }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 100%">TEST SPEED/ kmph</td>
                                    <td style="width: 100%">{{ $report->test_speed_result }}</td>
                                    <td style="width: 100%">AMBIENT TEMPERATURE / °C</td>
                                    <td style="width: 100%">{{ $report->ambient_temperature }}</td>
                                </tr>
                                <tr style="width: 100%">
                                    <td style="width: 100%">WARM UP DURATION/min</td>
                                    <td style="width: 100%">{{ $report->warm_up_duration }}</td>
                                    <td style="width: 100%">TYRE WEIGHT/kg</td>
                                    <td style="width: 100%">{{ $report->tyre_weight }}</td>
                                </tr>
                            </table> <br>
                            <table>
                                <tr style="width: 100%">
                                    <td style="width: 100%">INITIAL ROLLING RESISTANCE COEFFECIENT N/kN </td>
                                    <td style="width: 100%">{{ $report->initial_rolling_resistance_coeffecient }}</td>
                                </tr>
                                <tr style="width: 100%">
                                    <td style="width: 100%">
                                        @if ($report->rolling_resistance_label == 'rolling_resistance_value')
                                            {{ 'ROLLING RESISTANCE COEFFIECIENT (25°C, 2M) N/KN' }}
                                        @elseif ($report->rolling_resistance_label == 'sound_level_value')
                                            {{ 'SOUND LEVEL ACCORDING TO AIS-142 OF ANNEX-A(dBA)' }}
                                        @elseif ($rolling_resistance_label == 'rolling_resistance_value_1.7')
                                            {{ 'ROLLING RESISTANCE COEFFICIENT-AIS-142,ANNEX-D(25°C,1.7M)N/KN' }}
                                        @else
                                            {{ 'WET GRIP INDEX ACCORDING TO AIS-142 OF ANNEX-C' }}
                                        @endif

                                    </td>
                                    <td style="width: 100%">
                                        {{ $report->temp_corrected_rolling_resistance_coeffecient }}</td>
                                </tr>
                                <tr style="width: 100%">
                                    <td style="width: 100%">TEMPERATURE AND DRUM DIAMETER CORRECTED ROLLING RESISTANCE
                                        COEFFECIENT (25°C,2m)
                                        N/kN </td>
                                    <td style="width: 100%">
                                        {{ $report->temp_diameter_corrected_rolling_resistance_coeffecient }}</td>
                                </tr>
                            </table> <br>
                            <table>
                                <tr style="width: 100%">
                                    <td style="width: 100%">APPROVED BY</td>
                                    <td style="width: 100%">{{ $report->approved_by }}</td>

                                    <td style="width: 100%"> <img
                                            src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/images/signature/') . $report->signature)) }} "
                                            alt="" style="width: 100px; height: 50px;"></td>
                                    <td style="width: 100%">TEST WITNESSED</td>
                                    <td style="width: 100%">{{ $report->test_witnessed }}</td>
                                </tr>
                            </table> <br>

                            </table>
                            <div id="notices">
                                <div class="end" style="width: 90%">--- END OF THE REPORT ---</div>
                                <div style="width: 85%">
                                    Mysuru Office:
                                    C/o Raghupati Singhania Center of Excellence.
                                    437, Hebbal Industrial AriaMysuru-570016, Karnataka, IndiaTel. 0821-2511810, Web:
                                    www hasetri.com
                                    Regd. Office: JAYKAYGRAM, KANKROLI – 313342 DIST.: RAJSAMAND (RAJASTHAN) INDIA
                                    CIN No. :U73100RJ1991NPL006245
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<style>
    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    a {
        color: #5d6975;
        text-decoration: underline;
    }

    h3 {
        font-size: 11px;
    }


    body {
        position: relative;
        width: 21cm;
        height: 29.7cm;
        margin: 0 auto;
        color: #001028;
        background: #ffffff;
        font-family: 'Segoe UI',
            Tahoma,
            Geneva,
            Verdana,
            sans-serif;
        font-size: 12px;
        font-family: 'Segoe UI',
            Tahoma,
            Geneva,
            Verdana,
            sans-serif;


    }

    header {
        padding: 0px 0;
        margin-bottom: 0px;
    }

    #logo {
        text-align: center;
        margin-bottom: 0px;
    }

    .end {
        text-align: center;
    }

    #logo img {
        width: 50%;
    }

    #header-image img {
        width: 90%;
    }



    #project {
        float: left;
    }


    #company {
        float: right;
        text-align: right;
    }

    #project div,
    #company div {
        white-space: nowrap;
    }

    #qrcode {
        border: none !important;
    }


    table {
        width: 90%;
        border-collapse: collapse;
        background: white;
        table-layout: fixed;
        border: 1px solid black;


    }

    table td {
        padding: 2px;
        border: 1px solid black;
    }
</style>
