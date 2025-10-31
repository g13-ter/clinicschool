<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicVisitController extends Controller
{
    public function index()
    {
        // UI-only sample data for preview
        $visits = [
            (object)[ 'id' => 1, 'patient_name' => 'Gerson Tero', 'visit_date' => '2025-10-14', 'complaint' => 'Headache' ],
            (object)[ 'id' => 2, 'patient_name' => 'Aaron Tulod', 'visit_date' => '2025-10-13', 'complaint' => 'Stomach ache' ],
        ];

        return view('clinic-visits.index', compact('visits'));
    }

    public function create()
    {
        return view('clinic-visits.clinic-form');
    }

    public function store(Request $request)
    {
        // UI only - no DB
        return redirect()->route('clinic-visits.index')->with('status', 'Visit saved (UI only)');
    }

    public function edit($id)
    {
        // sample single visit for edit UI
        $visit = (object)[ 'id' => $id, 'patient_name' => 'Gerson Tero', 'visit_date' => '2025-10-14', 'complaint' => 'Headache' ];
        return view('clinic-visits.clinic-form', compact('visit'));
    }

    public function update(Request $request, $id)
    {
        // UI only
        return redirect()->route('clinic-visits.index')->with('status', 'Visit updated (UI only)');
    }

    public function destroy($id)
    {
        // UI only
        return redirect()->route('clinic-visits.index')->with('status', 'Visit deleted (UI only)');
    }
}