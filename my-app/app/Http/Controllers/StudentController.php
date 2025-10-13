<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // TODO: persist student
        return redirect()->route('students.index')->with('status', 'Student created');
    }

    public function edit(string $id)
    {
        // TODO: load student by $id
        return view('students.edit', ['studentId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        // TODO: update student
        return redirect()->route('students.index')->with('status', 'Student updated');
    }

    public function destroy(string $id)
    {
        // TODO: delete student
        return redirect()->route('students.index')->with('status', 'Student deleted');
    }
}


