<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('locations.index', ['locations' => Location::all()]);
    }
    public function create($request)
    {

        $data = $request->validate([
            'location' => 'required',
        ]);

        $location = Location::create($data);

        if (!$location) {

            $notification = array(
                'message' => 'Failed to create location',
                'alert-type' => 'error'
            );

        } else {

            $notification = array(
                'message' => 'Location Created!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'location' => 'required',
        ]);

        $location = Location::findOrFail($id);
        $location->location = $data['location'];

        if ($location->update()) {

            $notification = array(
                'message' => 'Location updated!',
                'alert-type' => 'success'
            );
        }


        return back()->with($notification);
    }
    public function destroy($id)
    {
        $location = Location::find($id);

        if ($location->delete()) {

            $notification = array(
                'message' => 'Location deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
}
