<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicVisitController extends Controller
{
    public function index()
    {
        // Example static data for UI preview
        $visits = [
            (object)[
                'id' => 1,
                'patient_name' => 'JGerson Tero',
                'visit_date' => '2025-10-14'
            ],
            (object)[
                'id' => 2,
                'patient_name' => 'Aaron Tulod',
                'visit_date' => '2025-10-13'
            ]
        ];
        return view('clinic-visits.index', compact('visits'));
    }

    public function create()
    {
        return view('clinic-visits.create');
    }

    public function store(Request $request)
    {
        // No saving, just redirect for UI
        return redirect()->route('clinic-visits.index')->with('status', 'Visit saved (UI only)');
    }

    public function edit($id)
    {
        // Example static data for UI preview
        $visit = (object)[
            'id' => $id,
            'patient_name' => 'Gerson Tero',
            'visit_date' => '2025-10-14'
        ];
        return view('clinic-visits.edit', compact('visit'));
    }

    public function update(Request $request, $id)
    {
        // No updating, just redirect for UI
        return redirect()->route('clinic-visits.index')->with('status', 'Visit updated (UI only)');
    }

    public function destroy($id)
    {
        // No deleting, just redirect for UI
        return redirect()->route('clinic-visits.index')->with('status', 'Visit deleted (UI only)');
    }
}