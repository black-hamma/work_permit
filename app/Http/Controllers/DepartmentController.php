<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department.index');
    }
    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
