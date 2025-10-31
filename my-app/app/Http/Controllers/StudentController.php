<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->get('tab', 'list');
        
        // For now, return empty collection for students
        $students = collect();

        return view('students.index', compact('students', 'tab'));
    }

    public function create()
    {
        return redirect()->route('students.index', ['tab' => 'add']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|string',
            'student_number' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:15|max:50',
            'guardian_contact' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'course' => 'required|string',
        ]);

        // For now, just redirect with success message
        // Later you can add: Student::create($request->all());
        
        $returnTab = $request->input('return_tab', 'list');
        
        return redirect()->route('students.index', ['tab' => $returnTab])
                        ->with('status', 'Student registered successfully!');
    }

    public function edit(string $id)
    {
        return view('students.edit', ['studentId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('students.index')->with('status', 'Student updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('students.index')->with('status', 'Student deleted');
    }
}