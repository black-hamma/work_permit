<?php

namespace App\Http\Controllers;

use App\Models\HazardIdentification;
use Illuminate\Http\Request;

class HazardIdentificationController extends Controller
{

    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('hazards.index', ['hazard_identifications' => HazardIdentification::all()]);
    }
    public function create($request)
    {

        $data = $request->validate([
            'hazard_identification' => 'required',
        ]);

        $HazardIdentification = HazardIdentification::create($data);

        if (!$HazardIdentification) {

            $notification = array(
                'message' => 'Failed to create Hazard Identification',
                'alert-type' => 'error'
            );

        } else {

            $notification = array(
                'message' => 'Hazard Identification Created!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'hazard_identification' => 'required',
        ]);

        $hazard_identification = HazardIdentification::findOrFail($id);
        $hazard_identification->hazard_identification = $data['hazard_identification'];

        if ($hazard_identification->update()) {

            $notification = array(
                'message' => 'Hazard Identification updated!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
    public function destroy($id)
    {
        $hazard_identification = HazardIdentification::find($id);

        if ($hazard_identification->delete()) {

            $notification = array(
                'message' => 'Hazard Identification deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
}
