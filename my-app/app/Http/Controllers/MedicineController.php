<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return view('medicines.index');
    }

    public function create()
    {
        return view('medicines.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('medicines.index')->with('status', 'Medicine created');
    }

    public function edit(string $id)
    {
        return view('medicines.edit', ['medicineId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('medicines.index')->with('status', 'Medicine updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('medicines.index')->with('status', 'Medicine deleted');
    }
}


