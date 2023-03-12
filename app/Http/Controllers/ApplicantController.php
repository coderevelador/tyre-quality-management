<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use PDF;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $applicant = Applicant::all();
        return view('applicant.index', compact('applicant'));
    }

    public function add()
    {
        return view('applicant.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'landmark' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'pincode' => 'required'
        ]);
        $applicant = new Applicant();
        $applicant->name = $request->name;
        $applicant->landmark = $request->landmark;
        $applicant->city = $request->city;
        $applicant->state = $request->state;
        $applicant->country = $request->country;
        $applicant->pincode = $request->pincode;

        $applicant->save();


        return redirect()->route('all_applicant')->with('message', 'Applicant Added Successfully');
    }

    public function edit($applicant)
    {
        $applicant = Applicant::find($applicant);
        return view('applicant.edit', compact('applicant'));
    }

    public function update($applicant, Request $request)
    {

        $applicant =  Applicant::find($applicant);
        $applicant->name = $request->name;
        $applicant->landmark = $request->landmark;
        $applicant->city = $request->city;
        $applicant->state = $request->state;
        $applicant->country = $request->country;
        $applicant->pincode = $request->pincode;

        $applicant->update();

        return redirect()->route('all_applicant')->with('message', 'Applicant Updated Successfully');
    }

    public function delete($applicant)
    {
        $user = Applicant::find($applicant)->forceDelete();
        return redirect()->route('all_applicant')->with('error', 'Applicant Deleted Successfully');
    }
}
