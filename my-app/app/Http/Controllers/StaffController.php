<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('staff.index');
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('staff.index')->with('status', 'Staff created');
    }

    public function edit(string $id)
    {
        return view('staff.edit', ['staffId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('staff.index')->with('status', 'Staff updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('staff.index')->with('status', 'Staff deleted');
    }
}


