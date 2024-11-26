<?php

namespace App\Http\Controllers;

use App\Models\PpeRequirement;
use Illuminate\Http\Request;

class PpeRequirementController extends Controller
{
    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('ppe-requirements.index', ['requirements' => PpeRequirement::all()]);
    }

    // Store a newly created job requirement in storage
    public function create($request)
    {

        $data = $request->validate([
            'ppe_requirement' => 'required',
        ]);

        $ppe_requirement = PpeRequirement::create($data);

        if (!$ppe_requirement) {

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
            'ppe_requirement' => 'required',
        ]);

        $requirement = PpeRequirement::findOrFail($id);
        $requirement->ppe_requirement = $data['ppe_requirement'];

        if ($requirement->update()) {

            $notification = array(
                'message' => 'Job Requirement updated!',
                'alert-type' => 'success'
            );
        }


        return back()->with('success', 'Requirement updated');
    }

    public function destroy($id)
    {
        $requirement = PpeRequirement::find($id);
        $requirement->delete();
        return back()->with('success', 'Requirement deleted successfully');
    }

}
