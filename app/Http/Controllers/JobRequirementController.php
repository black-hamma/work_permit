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

        $job_requirement = JobRequirement::create($data);

        if (!$job_requirement) {

            $notification = array(
                'message' => 'Failed to create Job Requirement',
                'alert-type' => 'error'
            );
        } else {
            $notification = array(
                'message' => 'Job Requirement Created!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'job_requirement' => 'required',
        ]);

        $requirement = JobRequirement::findOrFail($id);
        $requirement->job_requirement = $data['job_requirement'];

        if ($requirement->update()) {

            $notification = array(
                'message' => 'Job Requirement updated!',
                'alert-type' => 'success'
            );
        }


        return back()->with($notification);
    }

    public function destroy($id)
    {
        $requirement = JobRequirement::find($id);
        $requirement->delete();
        return redirect()->back()->with('message', 'Requirement deleted successfully');
    }
}
