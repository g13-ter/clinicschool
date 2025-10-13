@extends('layouts.app')

@section('title', 'Add Staff')

@section('content')
    <form method="POST" action="{{ route('staff.store') }}" class="bg-white rounded-xl p-6 shadow-md">
        @csrf
        @include('staff.partials._form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded">Save</button>
        </div>
    </form>
@endsection


