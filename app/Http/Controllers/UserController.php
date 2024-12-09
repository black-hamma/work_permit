<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Import DomPDF
use Str;


class UserController extends Controller
{
    public function index()
    {
        return view("users.index");
    }
    public function create()
    {
        return view("users.create");
    }
    public function store(Request $request)
    {
        //dd(request()->all()

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'company' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:10',
            'is_admin' => 'nullable|boolean',
        ]);

        // Generate a random password
        $plainPassword = Str::random(10);

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'company' => $request->company,
            'phone' => $request->phone,
            'is_admin' => $request->has('is_admin') ? 1 : 0, // Set to 1 if checked, else 0
            'status' => false, // Default to active
            'password' => Hash::make($plainPassword), // Replace this logic as needed
        ]);

        dd($user);



        // Generate PDF
        // $pdf = Pdf::loadView('pdf.user', [
        //     'user' => $user,
        //     'password' => $plainPassword, // Pass the plain text password to the view
        // ]);

        // Pass user data and plain password to a view for confirmation
        // return view('users.confirm', [
        //     'user' => $user,
        //     'password' => $plainPassword,
        // ]);

        // Download PDF (or use `stream` to display in-browser)
        //return $pdf->download('user-details.pdf');
        //dd($user);
    }
}
