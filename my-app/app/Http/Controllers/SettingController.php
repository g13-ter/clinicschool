<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function create()
    {
        return view('settings.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('settings.index')->with('status', 'Setting created');
    }

    public function edit(string $id)
    {
        return view('settings.edit', ['settingId' => $id]);
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('settings.index')->with('status', 'Setting updated');
    }

    public function destroy(string $id)
    {
        return redirect()->route('settings.index')->with('status', 'Setting deleted');
    }
}


