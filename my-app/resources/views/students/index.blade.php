@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Students</h1>
    <a href="{{ route('students.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">New Student</a>
    <div class="bg-white rounded-xl p-6 shadow-md">
        @if(count($students))
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                        <td class="border px-4 py-2">{{ $student->email }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('students.edit', $student->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No students found.</p>
        @endif
    </div>
@endsection