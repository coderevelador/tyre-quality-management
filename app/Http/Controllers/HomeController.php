<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\GenerateReport;
use App\Models\GenerateReportAis;
use App\Models\TestMachine;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_report = count(GenerateReport::all());
        $count_report_asi = count(GenerateReportAis::all());
        // $count_machine = count(TestMachine::all());
        $count_applicant = count(Applicant::all());

        return view('home', compact('count_report', 'count_report_asi', 'count_applicant'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        $count_report = count(GenerateReport::all());
        $count_report_asi = count(GenerateReportAis::all());
        $count_machine = count(TestMachine::all());
        // $count_applicant = count(Applicant::all());
        $count_users = count(User::all());

        $generate_reports = GenerateReport::latest()->paginate(10);
        $generate_reports_asi = GenerateReportAis::latest()->paginate(10);

        return view('adminHome', compact('count_report', 'count_machine', 'count_report_asi', 'count_users', 'generate_reports','generate_reports_asi'));
    }
}
