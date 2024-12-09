<?php

namespace App\Http\Controllers;

use App\Models\Hazard;
use Illuminate\Http\Request;

class HazardController extends Controller
{

    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('hazards.index', ['hazards' => Hazard::all()]);
    }
    public function create($request)
    {

        $data = $request->validate([
            'hazard' => 'required',
        ]);

        $hazard = hazard::create($data);

        if (!$hazard) {

            $notification = array(
                'message' => 'Failed to create hazard',
                'alert-type' => 'error'
            );

        } else {

            $notification = array(
                'message' => 'Hazard Created!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'hazard' => 'required',
        ]);

        $hazard = Hazard::findOrFail($id);
        $hazard->hazard = $data['hazard'];

        if ($hazard->update()) {

            $notification = array(
                'message' => 'Hazard updated!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
    public function destroy($id)
    {
        $hazard = Hazard::find($id);

        if ($hazard->delete()) {

            $notification = array(
                'message' => 'Hazard deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
}
