<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // Start query
        $query = Student::query();
        
        // Filter by course if provided
        if ($request->filled('course')) {
            $query->where('course', $request->course);
        }
        
        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('student_id', 'like', "%{$search}%")
                  ->orWhere('student_number', 'like', "%{$search}%");
            });
        }
        
        // Get all students ordered by created date
        $students = $query->orderBy('created_at', 'desc')->get();
        
        // Get all unique courses for the filter dropdown
        $courses = Student::select('course')
            ->whereNotNull('course')
            ->distinct()
            ->orderBy('course')
            ->pluck('course')
            ->filter()
            ->values();

        return view('students.index', compact('students', 'courses'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|string|unique:students,student_id',
            'student_number' => 'required|string|unique:students,student_number',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'nullable|integer|min:15|max:50',
            'guardian_contact' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'course' => 'required|string',
        ]);

        // Calculate age from birth_date if not provided
        if (empty($validated['age']) && !empty($validated['birth_date'])) {
            $validated['age'] = \Carbon\Carbon::parse($validated['birth_date'])->age;
        }

        // Set default status to active for new students
        $validated['is_active'] = true;

        // Create the student in database
        Student::create($validated);
        
        return redirect()->route('students.index')
                        ->with('status', 'Student registered successfully!');
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $validated = $request->validate([
            'student_id' => 'required|string|unique:students,student_id,' . $id,
            'student_number' => 'required|string|unique:students,student_number,' . $id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'nullable|integer|min:15|max:50',
            'guardian_contact' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'course' => 'required|string',
            'grade_level' => 'nullable|string',
            'section' => 'nullable|string',
            'contact_number' => 'nullable|string',
            'emergency_contact' => 'nullable|string',
            'medical_notes' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);

        // Calculate age from birth_date if not provided
        if (empty($validated['age']) && !empty($validated['birth_date'])) {
            $validated['age'] = \Carbon\Carbon::parse($validated['birth_date'])->age;
        }

        // Handle is_active checkbox (if not submitted, default to false)
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $student->update($validated);
        
        return redirect()->route('students.index')
                        ->with('status', 'Student updated successfully!');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        
        return redirect()->route('students.index')
                        ->with('status', 'Student deleted successfully!');
    }
}