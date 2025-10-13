@extends('layouts.app')

@section('title', 'Reports')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold text-clinic-dark">Reports</h1>
        <a href="{{ route('reports.create') }}" class="px-4 py-2 bg-clinic-blue text-white rounded">New Report</a>
    </div>
    <div class="bg-white rounded-xl p-6 shadow-md">
        <p class="text-gray-600">List goes here.</p>
    </div>
@endsection


