@extends('layouts.app')

@section('title', 'Edit Clinic Visit')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Clinic Visit</h1>
    <form method="POST" action="{{ route('clinic-visits.update', $visit->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="patient_name" class="block">Patient Name</label>
            <input type="text" name="patient_name" id="patient_name" class="border rounded w-full" value="{{ old('patient_name', $visit->patient_name) }}" required>
        </div>
        <div class="mb-4">
            <label for="visit_date" class="block">Visit Date</label>
            <input type="date" name="visit_date" id="visit_date" class="border rounded w-full" value="{{ old('visit_date', $visit->visit_date) }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Visit</button>
    </form>
@endsection