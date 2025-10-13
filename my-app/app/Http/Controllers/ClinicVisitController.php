<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicVisitController extends Controller
{
    public function index()
    {
        return view('clinic-visits.clinic-form');
    }

    public function create()
    {
        return view('clinic-visits.clinic-form');
    }

    public function store(Request $request)
    {
        return redirect()->route('visits.index')->with('status', 'Visit saved');
    }

    public function edit(string $id)
    {
        return view('clinic-visits.clinic-form', ['visitId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('visits.index')->with('status', 'Visit updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('visits.index')->with('status', 'Visit deleted');
    }
}


