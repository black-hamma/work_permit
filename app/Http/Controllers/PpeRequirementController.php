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
                'message' => 'Failed to create PPE Requirement',
                'alert-type' => 'error'
            );
        } else {
            $notification = array(
                'message' => 'PPE Requirement Created!',
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
                'message' => 'PPE Requirement updated!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }

    public function destroy($id)
    {
        $requirement = PpeRequirement::find($id);

        if ($requirement->delete()) {

            $notification = array(
                'message' => 'PPE Requirement deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }

}
