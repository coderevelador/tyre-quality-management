<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignatureController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $signature = Signature::where('user_id', '=', $user)->get();

        return view('signature.index', compact('signature'));
    }

    public function add()
    {
        return view('signature.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'signature' => 'required',
            'user_id' => 'required',
        ]);

        $signature = new Signature;

        $signature->name = $request->name;

        $sign_name = time() . '.' . $request->signature->extension();
        $request->signature->move(public_path('/images/signature'), $sign_name);
        $signature->signature = $sign_name;
        $signature->user_id = $request->user_id;
        // dd($signature);
        $signature->save();

        return redirect()->route('all_signature')->with('message', 'Signature Uploaded Successfully');
    }


    public function delete($id)
    {
        $sign = Signature::find($id);

        if ($sign->signature != '') {
            unlink(public_path('images/signature/' . $sign->signature));
        }

        $sign->delete();

        return redirect()->route('all_signature')->with('error', 'Signature Deleted Successfully');
    }
}
