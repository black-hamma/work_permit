<?php

namespace App\Http\Controllers;

use App\Models\PrecautionaryMeasure;
use Illuminate\Http\Request;

class PrecautionaryMeasureController extends Controller
{
    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('precautionary-measures.index', ['measures' => PrecautionaryMeasure::all()]);
    }

    public function create($request)
    {

        $data = $request->validate([
            'precautionary_measure' => 'required',
        ]);

        $precautionary_measure = PrecautionaryMeasure::create($data);

        if ($precautionary_measure) {

            $notification = array(
                'message' => 'Precautionary Measure Created!',
                'alert-type' => 'success'
            );


        } else {

            $notification = array(
                'message' => 'Failed to create Job Requirement',
                'alert-type' => 'error'
            );

        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'precautionary_measure' => 'required',
        ]);

        $measure = PrecautionaryMeasure::findOrFail($id);
        $measure->precautionary_measure = $data['precautionary_measure'];

        if ($measure->update()) {

            $notification = array(
                'message' => 'Precautionary Measure updated!',
                'alert-type' => 'success'
            );
        }


        return back()->with($notification);
    }

    public function destroy($id)
    {
        $measure = PrecautionaryMeasure::find($id);

        if ($measure->delete()) {

            $notification = array(
                'message' => 'Precautionary Measure deleted!',
                'alert-type' => 'success'
            );
        } else {

            $notification = array(
                'message' => 'Failed to delete Precautionary Measure!',
                'alert-type' => 'error'
            );

        }
        return back()->with($notification);
    }
}
