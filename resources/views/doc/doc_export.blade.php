<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
</head>

<body>
    <header class="clearfix">
        <div id="header-image">
            <img src="images/generate_reports/header.png" />
        </div>
        <table id="qrcode">
            <thead id="qrcode">
                <tr id="qrcode">
                    <td id="qrcode">
                        <div id="logo"> <img src="data:image/png;base64, {!! $qr_code !!}"
                                alt="testimage" />
                        </div>
                        <h3 style="text-align: center;">
                            HTAC NO: 40351122
                        </h3>
                    </td>
                    <td id="qrcode">
                        <h2 style="text-align: center;">
                            TYRE ROLLING RESISTANCE TEST REPORT <br />
                            (ECE R 117, ANNEXURE 6)
                        </h2> <br>
                        <h3 style="text-align: center;">
                            NABL ACCREDITATION CERTIFICATE NO. TC5274
                        </h3>
                    </td>
                    <td id="qrcode">
                        <h4 style="text-align: center;">ULR: TC-527422000002321</h4>
                    </td>
                </tr>
        </table>

    </header>

    <main>
        <table >

            <tr>
                <td style="width: 100%"><b>1. DATE OF TEST</b></td>
                <td style="width: 100%">{{ $date }}</td>
            </tr>
            <tr>
                <td style="width: 100%"><b>2. TEST MACHINE DETAILS</b></td>
                <td style="width: 100%">{{ $test_machine }}</td>
            </tr>
            <tr>
                <td style="width: 100%"><b>3. APPLICANT</b></td>
                <td style="width: 100%">{{ $applicant }}</td>
            </tr>
        </table> <br>
        <b>4. TEST TYRE DETAILS</b>
        <table>

            <tr>
                <td style="width: 100%">SIZE OF SAMPLE</td>
                <td style="width: 100%">{{ $size_of_sample }}</td>
                <td style="width: 100%">MANUFACTURER</td>
                <td style="width: 100%">{{ $manufacturer }}</td>
            </tr>
            <tr>
                <td style="width: 100%">TRADE MARK</td>
                <td style="width: 100%">{{ $trade_mark }}</td>
                <td style="width: 100%">SAMPLE QUANTITY</td>
                <td style="width: 100%">{{ $sample_quantity }}</td>
            </tr>
            <tr>
                <td style="width: 100%">PATTERN</td>
                <td style="width: 100%">{{ $trade_mark }}</td>
                <td style="width: 100%">CATEGORY OF USE</td>
                <td style="width: 100%">{{ $category_of_use }}</td>
            </tr>
            <tr>
                <td style="width: 100%">SL. NO.</td>
                <td style="width: 100%">{{ $sl_no }}</td>
                <td style="width: 100%">TYRE CLASS</td>
                <td style="width: 100%">{{ $tyre_class }}</td>
            </tr>
        </table> <br>

        <b>5. TEST DATA</b>
        <table>
            <tr>
                <td style="width: 100%">TEST RIM</td>
                <td style="width: 100%">{{ $test_rim }}</td>
                <td style="width: 100%">TEST STANDARD</td>
                <td style="width: 100%">{{ $test_standard }}</td>
            </tr>
            <tr>
                <td style="width: 100%">TEST INFLATION PRESSURE (kPa)</td>
                <td style="width: 100%">{{ $test_inflation_pressure }}</td>
                <td style="width: 100%">TEST METHOD</td>
                <td style="width: 100%">{{ $test_method }}</td>
            </tr>
            <tr>
                <td style="width: 100%">TEST LOAD (kg)</td>
                <td style="width: 100%">{{ $test_load }}</td>
                <td style="width: 100%">REFERENCE AMB. TEMPERATURE (°C)</td>
                <td style="width: 100%">{{ $reference_amb_temperature }}</td>
            </tr>
            <tr>
                <td style="width: 100%">TEST SPEED (KMPH)</td>
                <td style="width: 100%">{{ $test_speed }}</td>
                <td style="width: 100%">TEMPERATURE CORRECTION</td>
                <td style="width: 100%">{{ $temperature_correction }}</td>
            </tr>
            <tr>
                <td style="width: 100%">DRUM SURFACE</td>
                <td style="width: 100%">{{ $drum_surface }}</td>
                <td style="width: 100%">DRUM DIAMETER/m</td>
                <td style="width: 100%">{{ $drum_diameter }}</td>
            </tr>
        </table> <br>
        <b>6. TEST RESULTS</b>
        <table>
            <tr>
                <td style="width: 100%">THERMAL CONDITIONING</td>
                <td style="width: 100%">{{ $thermal_conditioning }}</td>
                <td style="width: 100%">Load rL(m)</td>
                <td style="width: 100%">{{ $thermal_conditioning_load }}</td>
                <td style="width: 100%">Skim rL(m)</td>
                <td style="width: 100%">{{ $thermal_conditioning_skim }}</td>
            </tr>
        </table> <br>
        <table>
            <tr>
                <td style="width: 100%">INITIAL TEST INFLATION /kPa</td>
                <td style="width: 100%">{{ $inital_test_inflation }}</td>
                <td style="width: 100%">FINAL TEST INFLATION /kPa</td>
                <td style="width: 100%">{{ $final_test_inflation }}</td>
            </tr>
            <tr>
                <td style="width: 100%">TEST SPEED/ kmph</td>
                <td style="width: 100%">{{ $test_speed_result }}</td>
                <td style="width: 100%">AMBIENT TEMPERATURE / °C</td>
                <td style="width: 100%">{{ $ambient_temperature }}</td>
            </tr>
            <tr style="width: 100%">
                <td style="width: 100%">WARM UP DURATION/min</td>
                <td style="width: 100%">{{ $warm_up_duration }}</td>
                <td style="width: 100%">TYRE WEIGHT/kg</td>
                <td style="width: 100%">{{ $tyre_weight }}</td>
            </tr>
        </table> <br>
        <table>
            <tr style="width: 100%">
                <td style="width: 100%">ROLLING RESISTANCE COEFFECIENT (25°C, 2m) N/kN</td>
                <td style="width: 100%">{{ $rolling_resistance_coeffecient }}</td>
            </tr>
        </table> <br>
        <table>
            <tr style="width: 100%">
                <td style="width: 100%">APPROVED BY</td>
                <td style="width: 100%">{{ $approved_by }}</td>

                <td style="width: 100%">{{ $signature }}</td>
                <td style="width: 100%">TEST WITNESSED: VCA</td>
                <td style="width: 100%">{{ $test_witnessed }}</td>
            </tr>
        </table> <br>
        <table> 
            <tr style="width: 100%">
                <td style="width: 100%">Remark: HARI SHANKAR SINGHANIA ELASTOMER & TYRE RESEARCH INSTITUTE has been
                    aligned for the
                    measurement of the Rolling Resistance Coefficient of tires, class C1/C2/C3 through a reference
                    laboratory of the according to EUROPEAN.COMMISSION REGULATION (EU) No 1235/2011 of, amending
                    REGULATION (EC) No 1222/2009 of the European Parliament and of the Council with regard the
                    measurement of rolling resistance.
                </td>
            </tr>

        </table>
        <div id="notices">
            <div class="end" style="width: 90%">--- END OF THE REPORT ---</div>
            <div style="width: 85%">
                Mysuru Office:
                C/o Raghupati Singhania Center of Excellence.
                437, Hebbal Industrial AriaMysuru-570016, Karnataka, IndiaTel. 0821-2511810, Web: www hasetri.com
                Regd. Office: JAYKAYGRAM, KANKROLI – 313342 DIST.: RAJSAMAND (RAJASTHAN) INDIA
                CIN No. :U73100RJ1991NPL006245
            </div>
        </div>
    </main>
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

    body {
        position: relative;
        width: 21cm;    
        height: 29.7cm;
        margin: 0 auto;
        color: #001028;
        background: #ffffff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 12px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif    ;
    }

    header {
        padding: 0px 0;
        margin-bottom: 0px;
    }

    #logo {
        text-align: center;
        margin-bottom: 10px;
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
