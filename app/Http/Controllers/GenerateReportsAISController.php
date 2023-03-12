<?php

namespace App\Http\Controllers;

use App\Models\GenerateReportAis;
use App\Models\Applicant;
use App\Models\Signature;
use App\Models\TestMachine;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class GenerateReportsAISController extends Controller
{
    public function index(Request $request)
    {

        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $generate_reports = GenerateReportAis::whereBetween('date_of_test', [$start_date, $end_date])->get();
        } else if ($request->input('filter_status')) {

            $filter_status = $request->input('filter_status');

            switch ($filter_status) {
                case 'PDF':
                    $status = 'PDF Generated';
                    break;
                case 'Hard copy send for approval':
                    $status = 'Hard copy send for approval';
                    break;
                case 'Rejected by the authority':
                    $status = 'Rejected by the authority';
                    break;
                case 'Approved by the authority':
                    $status = 'Approved by the authority';
                    break;
                default:
                    $status = '';
            }

            $generate_reports = GenerateReportAis::where('status', '=', $status)->get();
        } else {
            $filter_value = $request->input('filter_value');

            switch ($filter_value) {
                case '7days':
                    $days = 7;
                    break;
                case '30days':
                    $days = 30;
                    break;
                case '90days':
                    $days = 90;
                    break;
                case 'all':
                    $days = 100000;
                    break;
                default:
                    $days = 365;
            }

            $generate_reports = GenerateReportAis::whereDate('date_of_test', '>=', Carbon::today()->subDays($days))->get();
        }
        return view('generate_reports_AIS.index', compact('generate_reports'));
    }

    public function add()
    {
        $test_machine = TestMachine::all();
        $applicant = Applicant::all();
        $user = Auth::user()->id;
        $signature = Signature::where('user_id', '=', $user)->get();

        return view('generate_reports_AIS.add', compact('test_machine', 'applicant', 'signature'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'htac' => 'required',
            'ulr' => 'required',
            'date_of_test' => 'required',
            'test_machine_details_id' => 'required',
            'applicant_id' => 'required',
            'size_of_sample' => 'required',
            'manufacturer' => 'required',
            'trade_mark' => 'required',
            'sample_quantity' => 'required',
            'pattern' => 'required',
            'category_of_use' => 'required',
            'sl_no' => 'required',
            'tyre_class' => 'required',
            'test_rim' => 'required',
            'test_standard' => 'required',
            'test_inflation_pressure' => 'required',
            'test_method' => 'required',
            'test_load' => 'required',
            'reference_amb_temperature' => 'required',
            'skim_load' => 'required',
            'test_rim_material' => 'required',
            'test_speed' => 'required',
            'temperature_correction' => 'required',
            'drum_surface' => 'required',
            'drum_diameter' => 'required',
            'thermal_conditioning' => 'required',
            'thermal_conditioning_rl_mm' => 'required',
            'inital_test_inflation' => 'required',
            'final_test_inflation' => 'required',
            'test_speed_result' => 'required',
            'ambient_temperature' => 'required',
            'warm_up_duration' => 'required',
            'tyre_weight' => 'required',
            'initial_rolling_resistance_coeffecient' => 'required',
            'temp_corrected_rolling_resistance_coeffecient' => 'required',
            'temp_diameter_corrected_rolling_resistance_coeffecient' => 'required',
            'approved_by' => 'required',
            'signature' => 'required',
            'test_witnessed' => 'required',
            'status' => 'required',
        ]);

        $generate_reports = new GenerateReportAis();
        $generate_reports->htac = $request->htac;
        $generate_reports->ulr = $request->ulr;
        $generate_reports->date_of_test = $request->date_of_test;
        $generate_reports->test_machine_details_id = $request->test_machine_details_id;
        $generate_reports->applicant_id = $request->applicant_id;

        $generate_reports->size_of_sample = $request->size_of_sample;
        $generate_reports->manufacturer = $request->manufacturer;
        $generate_reports->trade_mark = $request->trade_mark;
        $generate_reports->sample_quantity = $request->sample_quantity;
        $generate_reports->pattern = $request->pattern;
        $generate_reports->category_of_use = $request->category_of_use;
        $generate_reports->sl_no = $request->sl_no;
        $generate_reports->tyre_class = $request->tyre_class;
        $generate_reports->test_rim = $request->test_rim;
        $generate_reports->test_standard = $request->test_standard;
        $generate_reports->test_inflation_pressure = $request->test_inflation_pressure;
        $generate_reports->test_method = $request->test_method;
        $generate_reports->test_load = $request->test_load;
        $generate_reports->reference_amb_temperature = $request->reference_amb_temperature;
        $generate_reports->skim_load = $request->skim_load;
        $generate_reports->test_rim_material = $request->test_rim_material;
        $generate_reports->test_speed = $request->test_speed;
        $generate_reports->temperature_correction = $request->temperature_correction;

        $generate_reports->drum_surface_label = $request->drum_surface_label;
        $generate_reports->drum_surface = $request->drum_surface;
        $generate_reports->drum_diameter_label = $request->drum_diameter_label;
        $generate_reports->drum_diameter = $request->drum_diameter;

        $generate_reports->thermal_conditioning = $request->thermal_conditioning;
        $generate_reports->thermal_conditioning_rl_mm = $request->thermal_conditioning_rl_mm;
        $generate_reports->inital_test_inflation = $request->inital_test_inflation;
        $generate_reports->final_test_inflation = $request->final_test_inflation;
        $generate_reports->test_speed_result = $request->test_speed_result;
        $generate_reports->ambient_temperature = $request->ambient_temperature;
        $generate_reports->warm_up_duration = $request->warm_up_duration;
        $generate_reports->tyre_weight = $request->tyre_weight;
        $generate_reports->initial_rolling_resistance_coeffecient = $request->initial_rolling_resistance_coeffecient;

        $generate_reports->temp_corrected_rolling_resistance_coeffecient = $request->temp_corrected_rolling_resistance_coeffecient;
        $generate_reports->rolling_resistance_label = $request->rolling_resistance_label;


        $generate_reports->temp_diameter_corrected_rolling_resistance_coeffecient = $request->temp_diameter_corrected_rolling_resistance_coeffecient;
        $generate_reports->approved_by = $request->approved_by;
        $generate_reports->signature = $request->signature;
        $generate_reports->test_witnessed = $request->test_witnessed;
        $generate_reports->status = $request->status;

        $title = $request->rolling_resistance_label;
        switch ($title) {
            case 'rolling_resistance_value':
                $title = "TYRE ROLLING RESISTANCE TEST REPORT(AIS-142,ANNEXURE-D)";
                break;
            case 'rolling_resistance_value_1.7':
                $title = "TYRE ROLLING RESISTANCE TEST REPORT(AIS-142,ANNEXURE-D)";
                break;
            case 'sound_level_value':
                $title = "TYRE SOUND LEVEL TEST REPORT (AIS-142 , ANNEXURE-A)";
                break;
            case 'wet_grip_value':
                $title = "TYRE WET GRIP INDEX TEST REPORT (AIS-142 , ANNEXURE-C)";
                break;
            default:
                $title = "TYRE ROLLING RESISTANCE TEST REPORT(AIS-142,ANNEXURE-D)";
        }
        // dd($title);

        $generate_reports->title = $title;

        $generate_reports->save();

        return redirect()->route('all_reports_AIS')->with('message', 'AIS Report Generated Successfully');
    }

    public function edit($id)
    {
        $generate_reports = GenerateReportAis::find($id);

        $test_machine = TestMachine::all();
        $applicant = Applicant::all();

        $user = Auth::user()->id;
        $signature = Signature::where('user_id', '=', $user)->get();

        return view('generate_reports_AIS.edit', compact('generate_reports', 'test_machine', 'applicant', 'signature'));
    }

    public function update(Request $request, $id)
    {


        $generate_reports = GenerateReportAis::find($id);
        $generate_reports->htac = $request->htac;
        $generate_reports->ulr = $request->ulr;
        $generate_reports->date_of_test = $request->date_of_test;
        $generate_reports->test_machine_details_id = $request->test_machine_details_id;
        $generate_reports->applicant_id = $request->applicant_id;

        $generate_reports->size_of_sample = $request->size_of_sample;
        $generate_reports->manufacturer = $request->manufacturer;
        $generate_reports->trade_mark = $request->trade_mark;
        $generate_reports->sample_quantity = $request->sample_quantity;
        $generate_reports->pattern = $request->pattern;
        $generate_reports->category_of_use = $request->category_of_use;
        $generate_reports->sl_no = $request->sl_no;
        $generate_reports->tyre_class = $request->tyre_class;
        $generate_reports->test_rim = $request->test_rim;
        $generate_reports->test_standard = $request->test_standard;
        $generate_reports->test_inflation_pressure = $request->test_inflation_pressure;
        $generate_reports->test_method = $request->test_method;
        $generate_reports->test_load = $request->test_load;
        $generate_reports->reference_amb_temperature = $request->reference_amb_temperature;
        $generate_reports->skim_load = $request->skim_load;
        $generate_reports->test_rim_material = $request->test_rim_material;
        $generate_reports->test_speed = $request->test_speed;
        $generate_reports->temperature_correction = $request->temperature_correction;

        $generate_reports->drum_surface_label = $request->drum_surface_label;
        $generate_reports->drum_surface = $request->drum_surface;
        $generate_reports->drum_diameter_label = $request->drum_diameter_label;
        $generate_reports->drum_diameter = $request->drum_diameter;

        $generate_reports->thermal_conditioning = $request->thermal_conditioning;
        $generate_reports->thermal_conditioning_rl_mm = $request->thermal_conditioning_rl_mm;
        $generate_reports->inital_test_inflation = $request->inital_test_inflation;
        $generate_reports->final_test_inflation = $request->final_test_inflation;
        $generate_reports->test_speed_result = $request->test_speed_result;
        $generate_reports->ambient_temperature = $request->ambient_temperature;
        $generate_reports->warm_up_duration = $request->warm_up_duration;
        $generate_reports->tyre_weight = $request->tyre_weight;
        $generate_reports->initial_rolling_resistance_coeffecient = $request->initial_rolling_resistance_coeffecient;

        $generate_reports->temp_corrected_rolling_resistance_coeffecient = $request->temp_corrected_rolling_resistance_coeffecient;
        $generate_reports->rolling_resistance_label = $request->rolling_resistance_label;


        $generate_reports->temp_diameter_corrected_rolling_resistance_coeffecient = $request->temp_diameter_corrected_rolling_resistance_coeffecient;
        $generate_reports->approved_by = $request->approved_by;
        $generate_reports->signature = $request->signature;
        $generate_reports->test_witnessed = $request->test_witnessed;
        $generate_reports->status = $request->status;

        $title = $request->rolling_resistance_label;
        switch ($title) {
            case 'rolling_resistance_value':
                $title = "TYRE ROLLING RESISTANCE TEST REPORT(AIS-142,ANNEXURE-D)";
                break;
            case 'sound_level_value':
                $title = "TYRE SOUND LEVEL TEST REPORT (AIS-142 , ANNEXURE-A)";
                break;
            case 'wet_grip_value':
                $title = "TYRE WET GRIP INDEX TEST REPORT (AIS-142 , ANNEXURE-C)";
                break;
            default:
                $title = "TYRE ROLLING RESISTANCE TEST REPORT(AIS-142,ANNEXURE-D)";
        }
        // dd($title);

        $generate_reports->title = $title;
        $generate_reports->update();

        return redirect()->route('all_reports_AIS')->with('info', 'Report AIS Updated Successfully');
    }
    public function delete($id)
    {
        $report = GenerateReportAis::find($id);

        $report->delete();

        return redirect()->route('all_reports_AIS')->with('error', 'Report AIS Deleted Successfully');
    }
}
