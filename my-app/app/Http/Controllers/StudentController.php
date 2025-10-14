<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Example static data for UI preview
        $students = [
            (object)[
                'id' => 1,
                'name' => 'Gerson Tero',
                'email' => 'gerson@gmail.com'
            ],
            (object)[
                'id' => 2,
                'name' => 'Aaron Tulod',
                'email' => 'aaron@gmail.com'
            ]
        ];
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // No saving, just redirect for UI
        return redirect()->route('students.index')->with('status', 'Student saved (UI only)');
    }

    public function edit($id)
    {
        // Example static data for UI preview
        $student = (object)[
            'id' => $id,
            'name' => 'Gerson Tero',
            'email' => 'gerson@gmail.com'
        ];
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        // No updating, just redirect for UI
        return redirect()->route('students.index')->with('status', 'Student updated (UI only)');
    }

    public function destroy($id)
    {
        // No deleting, just redirect for UI
        return redirect()->route('students.index')->with('status', 'Student deleted (UI only)');
    }
}