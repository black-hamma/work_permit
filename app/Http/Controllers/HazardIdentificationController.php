<?php

namespace App\Http\Controllers;

use App\Models\HazardIdentification;
use Illuminate\Http\Request;

class HazardIdentificationController extends Controller
{

    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('hazard_identifications.index', ['hazard_identifications' => HazardIdentification::all()]);
    }
    public function create($request)
    {

        $data = $request->validate([
            'hazard_identifications' => 'required',
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
            'hazard_identifications' => 'required',
        ]);

        $hazard_identifications = HazardIdentification::findOrFail($id);
        $hazard_identifications->HazardIdentification = $data['hazard_identifications'];

        if ($hazard_identifications->update()) {

            $notification = array(
                'message' => 'Hazard Identification updated!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
    public function destroy($id)
    {
        $HazardIdentification = HazardIdentification::find($id);

        if ($HazardIdentification->delete()) {

            $notification = array(
                'message' => 'Hazard Identification deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
}
