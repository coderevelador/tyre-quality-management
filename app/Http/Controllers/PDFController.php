<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\GenerateReport;
use Illuminate\Support\Carbon;
use App\Models\GenerateReportAis;
use Illuminate\Support\Facades\Crypt;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pdfdownload($id)
    {
        $report = GenerateReport::find($id);
        $report_title =  $report->report_title;
        $htac =  $report->htac;
        $ulr =  $report->ulr;
        $date = $report->date_of_test;
        $date = Carbon::parse($date)->format('d-M-Y');
        $test_machine = $report->TestMachine->name;
        $applicant = $report->Applicant->name;
        $qr_code =  url('/') . '/ece/view/pdf/' . Crypt::encrypt($report->id);
        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($qr_code));
        $size_of_sample = $report->size_of_sample;
        $manufacturer = $report->manufacturer;
        $trade_mark = $report->trade_mark;
        $sample_quantity = $report->sample_quantity;
        $pattern = $report->pattern;
        $category_of_use = $report->category_of_use;
        $sl_no = $report->sl_no;
        $tyre_class = $report->tyre_class;
        $test_rim = $report->test_rim;
        $test_standard = $report->test_standard;
        $test_inflation_pressure = $report->test_inflation_pressure;
        $test_method = $report->test_method;
        $test_load = $report->test_load;
        $reference_amb_temperature = $report->reference_amb_temperature;
        $test_speed = $report->test_speed;
        $temperature_correction = $report->temperature_correction;

        $drum_surface_label = $report->drum_surface_label;
        $drum_surface = $report->drum_surface;
        $drum_diameter_label = $report->drum_diameter_label;
        $drum_diameter = $report->drum_diameter;

        $thermal_conditioning = $report->thermal_conditioning;
        $thermal_conditioning_load = $report->thermal_conditioning_load;
        $thermal_conditioning_skim = $report->thermal_conditioning_skim;
        $inital_test_inflation = $report->inital_test_inflation;
        $final_test_inflation = $report->final_test_inflation;
        $test_speed_result = $report->test_speed_result;
        $ambient_temperature = $report->ambient_temperature;
        $warm_up_duration = $report->warm_up_duration;
        $tyre_weight = $report->tyre_weight;

        $rolling_resistance_label = $report->rolling_resistance_label;
        $rolling_resistance_coeffecient = $report->rolling_resistance_coeffecient;

        $approved_by = $report->approved_by;
        $signature = $report->signature;
        $test_witnessed = $report->test_witnessed;



        $pdf = PDF::loadView('pdf.pdf_export', [
            'title' => $report_title,
            'htac' => $htac,
            'ulr' => $ulr,
            'date' => $date,
            'qr_code' =>  $qrcode,
            'test_machine' => $test_machine,
            'applicant' => $applicant,
            'size_of_sample' => $size_of_sample,
            'manufacturer' => $manufacturer,
            'trade_mark' => $trade_mark,
            'sample_quantity' => $sample_quantity,
            'pattern' => $pattern,
            'category_of_use' => $category_of_use,
            'sl_no' => $sl_no,
            'tyre_class' => $tyre_class,
            'test_rim' => $test_rim,
            'test_standard' => $test_standard,
            'test_inflation_pressure' => $test_inflation_pressure,
            'test_method' => $test_method,
            'test_load' => $test_load,
            'reference_amb_temperature' => $reference_amb_temperature,
            'test_speed' => $test_speed,
            'temperature_correction' => $temperature_correction,
            'drum_surface_label' => $drum_surface_label,
            'drum_surface' => $drum_surface,
            'drum_diameter_label' => $drum_diameter_label,
            'drum_diameter' => $drum_diameter,
            'thermal_conditioning' => $thermal_conditioning,
            'thermal_conditioning_load' => $thermal_conditioning_load,
            'thermal_conditioning_skim' => $thermal_conditioning_skim,
            'inital_test_inflation' => $inital_test_inflation,
            'final_test_inflation' => $final_test_inflation,
            'test_speed_result' => $test_speed_result,
            'ambient_temperature' => $ambient_temperature,
            'warm_up_duration' => $warm_up_duration,
            'tyre_weight' => $tyre_weight,
            'rolling_resistance_label' => $rolling_resistance_label,
            'rolling_resistance_coeffecient' => $rolling_resistance_coeffecient,
            'approved_by' => $approved_by,
            'signature' => $signature,
            'test_witnessed' => $test_witnessed,


        ]);

        return $pdf->stream('ECE Report Generated on ' . $date . '-' . time() . '.pdf');
    }



    public function pdfdownloadais($id)
    {
        $report = GenerateReportAis::find($id);
        $report_title =  $report->title;
        $htac =  $report->htac;
        $ulr =  $report->ulr;
        $date = $report->date_of_test;
        $date = Carbon::parse($date)->format('d-M-Y');
        $test_machine = $report->TestMachine->name;
        $applicant = $report->Applicant->name;
        $qr_code =  url('/') . '/asi/view/pdf/' . Crypt::encrypt($report->id);
        $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($qr_code));
        $size_of_sample = $report->size_of_sample;
        $manufacturer = $report->manufacturer;
        $trade_mark = $report->trade_mark;
        $sample_quantity = $report->sample_quantity;
        $pattern = $report->pattern;
        $category_of_use = $report->category_of_use;
        $sl_no = $report->sl_no;
        $tyre_class = $report->tyre_class;
        $test_rim = $report->test_rim;
        $test_standard = $report->test_standard;
        $test_inflation_pressure = $report->test_inflation_pressure;
        $test_method = $report->test_method;
        $test_load = $report->test_load;
        $reference_amb_temperature = $report->reference_amb_temperature;
        $skim_load = $report->skim_load;
        $test_rim_material = $report->test_rim_material;
        $test_speed = $report->test_speed;
        $temperature_correction = $report->temperature_correction;
        $drum_surface_label = $report->drum_surface_label;
        $drum_surface = $report->drum_surface;
        $drum_diameter_label = $report->drum_diameter_label;
        $drum_diameter = $report->drum_diameter;
        $thermal_conditioning = $report->thermal_conditioning;
        $thermal_conditioning_rl_mm = $report->thermal_conditioning_rl_mm;
        $inital_test_inflation = $report->inital_test_inflation;
        $final_test_inflation = $report->final_test_inflation;
        $test_speed_result = $report->test_speed_result;
        $ambient_temperature = $report->ambient_temperature;
        $warm_up_duration = $report->warm_up_duration;
        $tyre_weight = $report->tyre_weight;
        $initial_rolling_resistance_coeffecient = $report->initial_rolling_resistance_coeffecient;
        $rolling_resistance_label = $report->rolling_resistance_label;
        $temp_corrected_rolling_resistance_coeffecient = $report->temp_corrected_rolling_resistance_coeffecient;
        $temp_diameter_corrected_rolling_resistance_coeffecient = $report->temp_diameter_corrected_rolling_resistance_coeffecient;
        $approved_by = $report->approved_by;
        $signature = $report->signature;
        $test_witnessed = $report->test_witnessed;



        $pdf = PDF::loadView('pdf.pdf_export_ais', [
            'title' => $report_title,
            'htac' => $htac,
            'ulr' => $ulr,
            'date' => $date,
            'qr_code' =>  $qrcode,
            'test_machine' => $test_machine,
            'applicant' => $applicant,
            'size_of_sample' => $size_of_sample,
            'manufacturer' => $manufacturer,
            'trade_mark' => $trade_mark,
            'sample_quantity' => $sample_quantity,
            'pattern' => $pattern,
            'category_of_use' => $category_of_use,
            'sl_no' => $sl_no,
            'tyre_class' => $tyre_class,
            'test_rim' => $test_rim,
            'test_standard' => $test_standard,
            'test_inflation_pressure' => $test_inflation_pressure,
            'test_method' => $test_method,
            'test_load' => $test_load,
            'reference_amb_temperature' => $reference_amb_temperature,
            'skim_load' => $skim_load,
            'test_rim_material' => $test_rim_material,
            'test_speed' => $test_speed,
            'temperature_correction' => $temperature_correction,
            'drum_surface_label' => $drum_surface_label,
            'drum_surface' => $drum_surface,
            'drum_diameter_label' => $drum_diameter_label,
            'drum_diameter' => $drum_diameter,
            'thermal_conditioning' => $thermal_conditioning,
            'thermal_conditioning_rl_mm' => $thermal_conditioning_rl_mm,
            'inital_test_inflation' => $inital_test_inflation,
            'final_test_inflation' => $final_test_inflation,
            'test_speed_result' => $test_speed_result,
            'ambient_temperature' => $ambient_temperature,
            'warm_up_duration' => $warm_up_duration,
            'tyre_weight' => $tyre_weight,
            'initial_rolling_resistance_coeffecient' => $initial_rolling_resistance_coeffecient,
            'rolling_resistance_label' => $rolling_resistance_label,
            'temp_corrected_rolling_resistance_coeffecient' => $temp_corrected_rolling_resistance_coeffecient,
            'temp_diameter_corrected_rolling_resistance_coeffecient' => $temp_diameter_corrected_rolling_resistance_coeffecient,
            'approved_by' => $approved_by,
            'signature' => $signature,
            'test_witnessed' => $test_witnessed,


        ]);

        return $pdf->stream('AIS Report Generated on ' . $date . '-' . time() . '.pdf');
    }
}
