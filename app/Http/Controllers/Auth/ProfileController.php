<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user)
    {
        $user = User::find($user);
        return view('auth.profile.index', ['user' => $user]);
    }
    public function edit($user)
    {
        $user = User::find($user);
        return view('auth.profile.edit', ['user' => $user]);
    }
    public function update(User $user, Request $request)
    {
        $user->update(request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]));
        // dd($request->image);
        if ($request->image != '') {
            if ($user->image != 'Placeholder-user.png') {
                unlink(public_path('images/profile/' . $user->image));
            }
            $image_name = "user-" . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/images/profile/'), $image_name);
            $user->image = $image_name;
            $user->update();
        }

        return redirect()->route('profile', $user->id)->with('message', 'Profile Updated Successfully');
    }

    public function ChangePassword(Request $request, $user)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        }

        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($user);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('message', "Password Changed Successfully");
    }
}
