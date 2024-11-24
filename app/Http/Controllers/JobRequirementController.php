<?php

namespace App\Http\Controllers;

use App\Models\JobRequirement;
use Illuminate\Http\Request;

class JobRequirementController extends Controller
{
    // Display a listing of job requirements
    public function index()
    {
        //$jobRequirements = JobRequirement::all();
        // return view('job-requirements.index', compact('jobRequirements'));
        return view('job-requirements.index');
    }

    // Store a newly created job requirement in storage
    public function store(Request $request)
    {

        $validated = $request->validate([

            'job_requirement' => 'required|string',

        ]);

        dd($validated);

        JobRequirement::create($validated);

        return redirect()->route('job-requirements.index')->with('success', 'Job Requirement created successfully.');
    }
}
