@extends('layouts.app')

@section('title', 'Edit Staff')

@section('content')
    <form method="POST" action="{{ route('staff.update', $staffId ?? 0) }}" class="bg-white rounded-xl p-6 shadow-md">
        @csrf
        @method('PUT')
        @include('staff.partials._form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded">Update</button>
        </div>
    </form>
@endsection


