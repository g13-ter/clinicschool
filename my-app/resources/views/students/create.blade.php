@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<div class="container mx-auto max-w-2xl">
    <h1 class="text-3xl font-bold mb-6">Add New Student</h1>

    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                    <input type="text" name="first_name" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" name="last_name" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
                    <input type="text" name="student_id" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Grade Level</label>
                    <input type="text" name="grade_level" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Section</label>
                    <input type="text" name="section" class="w-full border rounded px-3 py-2">
                </div>
            </div>

            <div class="mt-6 flex gap-3">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">Save Student</button>
                <a href="{{ route('students.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection


