@extends('layouts.app')

@section('title', 'Staff')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold text-clinic-dark">Staff</h1>
        <a href="{{ route('staff.create') }}" class="px-4 py-2 bg-clinic-blue text-white rounded">Add Staff</a>
    </div>
    <div class="bg-white rounded-xl p-6 shadow-md">
        <p class="text-gray-600">List goes here.</p>
    </div>
@endsection


