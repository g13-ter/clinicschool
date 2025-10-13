@extends('layouts.app')

@section('title', 'Create Report')

@section('content')
    <form method="POST" action="{{ route('reports.store') }}" class="bg-white rounded-xl p-6 shadow-md">
        @csrf
        @include('reports.partials._form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded">Generate</button>
        </div>
    </form>
@endsection


