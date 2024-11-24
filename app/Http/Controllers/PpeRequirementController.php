<?php

namespace App\Http\Controllers;

use App\Models\PpeRequirement;
use Illuminate\Http\Request;

class PpeRequirementController extends Controller
{
    // Display a listing of ppe requirements
    public function index()
    {
        //$jobRequirements = JobRequirement::all();
        // return view('ppe-requirements.index', compact('jobRequirements'));
        return view('ppe-requirements.index');
    }

    // Store a newly created ppe requirement in storage
    public function store(Request $request)
    {

        $validated = $request->validate([

            'ppe_requirement' => 'required|string',

        ]);

        dd($validated);

        PpeRequirement::create($validated);

        return redirect()->route('ppe-requirements.index')->with('success', 'PPE Requirement created successfully.');
    }
}
