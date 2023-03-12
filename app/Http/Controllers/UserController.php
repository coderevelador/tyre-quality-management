<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function add()
    {
        return view('users.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->image = 'Placeholder-user.png';
        $user->status = 1;
        if ($request->is_admin == true) {
            $user->is_admin = '1';
        } else {
            $user->is_admin = '0';
        }
        $user->save();

        $data = [
            'username' => $request->email,
            'password' => $request->password
        ];
        Mail::send('email.userRegistration', $data, function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('HASETRI Login Details');
        });

        return redirect()->route('all_users')->with('message', 'User Added Successfully');
    }

    public function edit($user)
    {
        $user = User::find($user);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $user)
    {
        $user = User::find($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($request->is_admin == true) {
            $user->is_admin = '1';
        } else {
            $user->is_admin = '0';
        }
        $user->save();

        return redirect()->route('all_users')->with('info', 'User Updated Successfully');
    }

    public function status($user)
    {
        $user = User::find($user);

        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->update();
        return redirect()->route('all_users')->with('info', 'User Status Updated');
    }

    public function delete($user)
    {
        $user = User::find($user)->delete();
        return redirect()->route('all_users')->with('error', 'User Deleted Successfully');
    }
}
