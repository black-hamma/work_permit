<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HazardController extends Controller
{

    public function index()
    {
        return view('hazard.index');
    }
    public function create()
    {
        return view('hazard.create');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
