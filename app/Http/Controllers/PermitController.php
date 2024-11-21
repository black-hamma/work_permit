<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function index()
    {
        return view("permits.index");
    }
    public function create()
    {
        return view("permits.create");
    }
    public function store(Request $request)
    {

        //$workers_names = json_decode($request->input('workers_names'), true);

        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'job_location' => 'required',
            'sub_location' => 'required',
            'department' => 'required',
            'equipment_details' => 'required',
            'job_description' => 'required',
            'receiver_name' => 'required',
            'contract_company' => 'required',
            'workers_names' => 'required',
            'staff_id' => 'required',
            'risk_assessment' => 'required',
            'permit_required' => 'required',
            'hazard_identification' => 'required',
            'job_requirements' => 'required',
            'ppe_requirements' => 'required',
            'precautionary_measure' => 'required',
            'disclaimer' => 'required'
        ]);

        dd($validated);


    }
}
