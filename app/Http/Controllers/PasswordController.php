<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('auth.changePassword');
    }
    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->force_password_change = false; // Mark as no longer needing a password change

        if ($user->save()) {

            $notification = array(
                'message' => 'Password changed successfully.',
                'alert-type' => 'success'
            );
        }


        if (Auth::user()->is_admin == 1) {
            return redirect()->route('admin.dashboard')->with($notification);
        }

        return redirect()->route('user.dashboard')->with($notification);

    }
}
