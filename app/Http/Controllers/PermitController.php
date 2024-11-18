<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function index()
    {
        return view("permits.index");
    }
    public function create()
    {
        return view("permits.create");
    }
    public function store(Request $request)
    {
        return $request;
    }
}
