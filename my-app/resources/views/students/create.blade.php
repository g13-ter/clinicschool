@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
    <form method="POST" action="{{ route('students.store') }}" class="bg-white rounded-xl p-6 shadow-md">
        @csrf
        @include('students.partials._form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded">Save</button>
        </div>
    </form>
@endsection


