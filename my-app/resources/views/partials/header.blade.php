@extends('layouts.app')

@section('content')
  <!-- page content -->
@endsection

<header class="fixed top-0 left-0 right-0 h-16 bg-[#273845] text-white shadow z-50 flex items-center px-6">
    <div class="flex items-center gap-4">
        <button id="sidebarToggle" class="md:hidden text-white text-xl">☰</button>

        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <span class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">+</span>
            <div class="leading-tight">
                <div class="text-lg font-bold">Benedicto College <span class="text-[#2b9bd7]">School Clinic</span></div>
                <div class="text-xs text-gray-300 -mt-1">Welcome, {{ auth()->user()->name ?? 'user' }}!</div>
            </div>
        </a>
    </div>

    <div class="ml-auto flex items-center gap-3">
        <div class="hidden md:flex items-center bg-white rounded-full px-3 py-1 text-gray-600">
            <input type="text" placeholder="Search" class="bg-transparent outline-none text-sm w-40">
            <button class="ml-2 text-blue-500">🔍</button>
        </div>

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Logout</button>
            </form>
        @endauth
    </div>
</header>