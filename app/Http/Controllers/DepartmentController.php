<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        return $request->isMethod('post') ? $this->create($request) : view('departments.index', ['departments' => Department::all()]);
    }
    public function create($request)
    {

        $data = $request->validate([
            'department' => 'required',
        ]);

        $department = Department::create($data);

        if (!$department) {

            $notification = array(
                'message' => 'Failed to create department',
                'alert-type' => 'error'
            );

        } else {

            $notification = array(
                'message' => 'Department Created!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);

    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'department' => 'required',
        ]);

        $department = Department::findOrFail($id);
        $department->department = $data['department'];

        if ($department->update()) {

            $notification = array(
                'message' => 'Department updated!',
                'alert-type' => 'success'
            );
        }


        return back()->with($notification);
    }
    public function destroy($id)
    {
        $department = Department::find($id);

        if ($department->delete()) {

            $notification = array(
                'message' => 'Department deleted!',
                'alert-type' => 'success'
            );
        }

        return back()->with($notification);
    }
}
