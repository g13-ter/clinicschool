<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClinicVisit;
use App\Models\Student;

class ClinicVisitController extends Controller
{
    public function index()
    {
        // Get all clinic visits with student relationship
        $visits = ClinicVisit::with('student')
            ->orderBy('visit_date', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('clinic-visits.index', compact('visits'));
    }

    public function create()
    {
        $students = Student::where('is_active', true)
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get();
        
        return view('clinic-visits.create', compact('students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'visit_date' => 'required|date',
            'complaint' => 'nullable|string|max:500',
            'diagnosis' => 'nullable|string|max:500',
            'treatment' => 'nullable|string|max:500',
            'notes' => 'nullable|string|max:1000',
        ]);

        ClinicVisit::create($validated);
        
        return redirect()->route('clinic-visits.index')
                        ->with('status', 'Clinic visit recorded successfully!');
    }

    public function edit($id)
    {
        $visit = ClinicVisit::findOrFail($id);
        $students = Student::where('is_active', true)
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->get();
        
        return view('clinic-visits.edit', compact('visit', 'students'));
    }

    public function update(Request $request, $id)
    {
        $visit = ClinicVisit::findOrFail($id);
        
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'visit_date' => 'required|date',
            'complaint' => 'nullable|string|max:500',
            'diagnosis' => 'nullable|string|max:500',
            'treatment' => 'nullable|string|max:500',
            'notes' => 'nullable|string|max:1000',
        ]);

        $visit->update($validated);
        
        return redirect()->route('clinic-visits.index')
                        ->with('status', 'Clinic visit updated successfully!');
    }

    public function destroy($id)
    {
        $visit = ClinicVisit::findOrFail($id);
        $visit->delete();
        
        return redirect()->route('clinic-visits.index')
                        ->with('status', 'Clinic visit deleted successfully!');
    }
}