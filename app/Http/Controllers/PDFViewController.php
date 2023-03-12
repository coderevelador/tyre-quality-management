<?php

namespace App\Http\Controllers;

use App\Models\GenerateReport;
use App\Models\GenerateReportAis;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

class PDFViewController extends Controller
{
    public function pdf_view_ece($id)
    {
        $id = Crypt::decrypt($id);
        $report = GenerateReport::find($id);
        $qrcode =  url('/') . '/ece/view/pdf/' . $report->id;
        
        return view('pdf.ece_report_view', compact('report', 'qrcode'));
    }

    public function pdf_view_asi($id)
    {
        $id = Crypt::decrypt($id);
        $report = GenerateReportAis::find($id);

        $qrcode =  url('/') . '/asi/view/pdf/' . $report->id;

        return view('pdf.asi_report_view', compact('report', 'qrcode'));
    }
}
