@extends('layouts.app')

@section('title', 'Clinic Visit Form')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Clinic Visit Form</h1>
    <form method="POST" action="{{ route('clinic-visits.store') }}">
        @csrf
        <div class="mb-4">
            <label for="patient_name" class="block">Patient Name</label>
            <input type="text" name="patient_name" id="patient_name" class="border rounded w-full" required>
        </div>
        <div class="mb-4">
            <label for="visit_date" class="block">Visit Date</label>
            <input type="date" name="visit_date" id="visit_date" class="border rounded w-full" required>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Visit</button>
    </form>
@endsection