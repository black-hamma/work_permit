<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login'); // Ensure this view exists
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Check if the logged-in user is an admin
            $user = Auth::user();

            //check if user status is active
            if ($user->status == 0) {
                Auth::logout();

                return back()->withErrors(['email' => 'Your account has been disabled. Please contact support.']);
            }

            // Check if the user needs to change their password
            if ($user->force_password_change) {
                return redirect()->route('password.change');
            }

            // Redirect based on user role
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
