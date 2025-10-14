@extends('layouts.app')

@section('title', 'Clinic Visits')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Clinic Visits</h1>
    <a href="{{ route('clinic-visits.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Visit</a>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Patient Name</th>
                <th class="px-4 py-2">Visit Date</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visits as $visit)
            <tr>
                <td class="border px-4 py-2">{{ $visit->patient_name }}</td>
                <td class="border px-4 py-2">{{ $visit->visit_date }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('clinic-visits.edit', $visit->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('clinic-visits.destroy', $visit->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Delete this visit?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection