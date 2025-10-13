@extends('layouts.app')

@section('title', 'Edit Setting')

@section('content')
    <form method="POST" action="{{ route('settings.update', $settingId ?? 0) }}" class="bg-white rounded-xl p-6 shadow-md">
        @csrf
        @method('PUT')
        @include('settings.partials._form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded">Update</button>
        </div>
    </form>
@endsection


