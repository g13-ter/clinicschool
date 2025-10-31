@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container mx-auto max-w-2xl">
    <h1 class="text-3xl font-bold mb-6">Edit Student</h1>

    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" name="first_name" value="{{ $student->first_name }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" name="last_name" value="{{ $student->last_name }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
                    <input type="text" name="student_id" value="{{ $student->student_id }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Grade Level</label>
                    <input type="text" name="grade_level" value="{{ $student->grade_level }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Section</label>
                    <input type="text" name="section" value="{{ $student->section }}" class="w-full border rounded px-3 py-2">
                </div>
            </div>

            <div class="mt-6 flex gap-3">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">Update Student</button>
                <a href="{{ route('students.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">Cancel</a>
            </div>
        </form>
    </div>
</div>

<ul class="list-none p-0 m-0 space-y-1">
    <li class="{{ request()->routeIs('dashboard') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">🏠</span>Dashboard
        </a>
    </li>
    <li class="{{ request()->routeIs('students.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('students.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">👥</span>Students
        </a>
    </li>
    <li class="{{ request()->routeIs('clinic-visits.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('clinic-visits.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">➕</span>Clinic Visits
        </a>
    </li>
    <li class="{{ request()->routeIs('medicines.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('medicines.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">💊</span>Medicine
        </a>
    </li>
    <li class="{{ request()->routeIs('staff.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('staff.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">🧑‍⚕️</span>Staff
        </a>
    </li>
    <li class="{{ request()->routeIs('reports.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('reports.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">📊</span>Reports
        </a>
    </li>
    <li class="{{ request()->routeIs('settings.*') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }}">
        <a href="{{ route('settings.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-50 rounded transition">
            <span class="mr-3">⚙️</span>Settings
        </a>
    </li>
</ul>
@endsection

<header class="fixed top-0 left-0 right-0 h-16 bg-[#273845] text-white shadow z-50 flex items-center px-6">
    <div class="flex items-center gap-4">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-4">
            <span class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-xl">+</span>
            <div class="leading-tight">
                <div class="text-lg font-bold">BENEDICTO COLLEGE <span class="text-[#2b9bd7]">SCHOOL CLINIC</span></div>
                @auth <div class="text-xs text-gray-300">Welcome, {{ auth()->user()->name }}!</div> @endauth
            </div>
        </a>
    </div>
    <div class="ml-auto flex items-center gap-3">
        @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">Logout</button>
        </form>
        @endauth
    </div>
</header>


