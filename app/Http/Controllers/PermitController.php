<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Location;
use App\Models\Permit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Str;
use Symfony\Component\Console\Input\Input;

class PermitController extends Controller
{
    public function index()
    {
        return view("permits.index");
    }
    public function create()
    {
        $locations = Location::all();
        $departments = Department::all();


        return view("permits.create", compact('locations', 'departments'));
    }
    public function store(Request $request)
    {
        $permit_required = $request->permit_required;

        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'job_location_id' => 'required|exists:job_locations,id',
            [
                'job_location_id.required' => 'The job location field is required.',
                'job_location_id.exists' => 'The selected job location is invalid.',
            ],
            'sub_location' => 'required',
            'department_id' => 'required|exists:department,id',
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
            'is_disclaimer' => 'required|boolean'
        ]);

        $permit_code = 'PMT-' . now()->format('YmdHis') . random_int(100, 999);

        $workers_names = json_decode($request->input('workers_names'), true);

        $start_date = Carbon::createFromFormat('m/d/Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('m/d/Y', $request->end_date)->format('Y-m-d');

        $permit = new Permit();

        $permit->start_date = $start_date;
        $permit->end_date = $end_date;
        $permit->job_location = $validated['job_location'];
        $permit->sub_location = $validated['sub_location'];
        $permit->department = $validated['department'];
        $permit->equipment_details = $validated['equipment_details'];
        $permit->job_description = $validated['job_description'];
        $permit->receiver_name = $validated['receiver_name'];
        $permit->contract_company = $validated['contract_company'];
        $permit->staff_id = $validated['staff_id'];
        $permit->workers_names = $workers_names;
        $permit->risk_assessment = $validated['risk_assessment'];
        $permit->permit_required = $validated['permit_required'];
        $permit->hazard_identification = $validated['hazard_identification'];
        $permit->job_requirements = $validated['job_requirements'];
        $permit->ppe_requirements = $validated['ppe_requirements'];
        $permit->precautionary_measure = $validated['precautionary_measure'];
        $permit->is_disclaimer = $request->has('is_disclaimer') ? 1 : 0;
        //$permit->$permit_code;
        $permit->permit_code;

        dd($permit);

        $permit->save();

        return redirect()->route('permits.index');
        //return $permit;
        //dd($permit);


        //dd('PMT-' . now()->format('YmdHis') . random_int(100, 999))

    }
}
