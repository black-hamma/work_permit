<?php

namespace App\Http\Controllers;

use App\Models\JobRequirement;
use Illuminate\Http\Request;

class JobRequirementController extends Controller
{
    // checking the method and take action appropriately
    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('job-requirements.index', ['requirements' => JobRequirement::all()]);
    }

    // Store a newly created job requirement in storage
    public function create($request)
    {

        $data = $request->validate([
            'job_requirement' => 'required',
        ]);

        JobRequirement::create($data);
        return back()->with('success', "{$data['job_requirement']} successfully created");

    }
}
