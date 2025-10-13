<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('reports.index')->with('status', 'Report created');
    }

    public function edit(string $id)
    {
        return view('reports.edit', ['reportId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('reports.index')->with('status', 'Report updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('reports.index')->with('status', 'Report deleted');
    }
}


