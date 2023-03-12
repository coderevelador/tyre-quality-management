<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestMachineRequest;
use App\Models\TestMachine;
use Illuminate\Http\Request;


class TestMachineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $test_machine = TestMachine::all();

        return view('test_machine.index', compact('test_machine'));
    }
    public function add()
    {
        return view('test_machine.add');
    }
    public function store(TestMachineRequest $request)
    {
        $test_machine = new TestMachine();
        $test_machine->name = $request->name;
        $test_machine->serial_no = $request->serial_no;

        $test_machine->save();

        return redirect()->route('all_test_machine')->with('message', 'Test Machine Added Successfully');
    }
    public function edit($machine)
    {
        $test_machine = TestMachine::find($machine);
        return view('test_machine.edit', compact('test_machine'));
    }

    public function update(Request $request, $machine)
    {
        $test_machine = TestMachine::find($machine);
        $test_machine->name = $request->name;
        $test_machine->serial_no = $request->serial_no;

        $test_machine->save();

        return redirect()->route('all_test_machine')->with('info', 'Test Machine Updated Successfully');
    }

    public function delete($machine)
    {
        $user = TestMachine::find($machine)->forceDelete();
        return redirect()->route('all_test_machine')->with('error', 'Test Machine Deleted Successfully');
    }
}
