<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade\Pdf; // Import DomPDF
use Str;


class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function index()
    {
        $users = User::all();
        return view("users.index", compact('users'));
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

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        $username = strtolower(substr($first_name, 0, 1)) . strtolower($last_name);

        // Create the user
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $username;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->phone = $request->phone;
        $user->is_admin = $request->has('is_admin') ? 1 : 0; // Set to 1 if checked, else 0
        $user->status = true; // Default to active
        $user->password = Hash::make($plainPassword); // Replace this logic as needed

        if ($user->save()) {
            $notification = array(
                'message' => 'User created!',
                'alert-type' => 'success'
            );
        }

        return redirect()->route('users.index')->with($notification);
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view("users.edit", compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        dd($request->all());
        return view("users.edit", compact('user'));
    }
}
