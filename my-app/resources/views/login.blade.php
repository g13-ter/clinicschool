@extends('layouts.app')

@section('content')
<div class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/bccc.png');">
    <div class="absolute inset-0 bg-white bg-opacity-70"></div>
    <div class="relative z-10 flex flex-col items-center w-full">
        <div class="flex items-center mb-4 mt-12">
            <span class="text-[7rem] text-[#1c3556] font-extrabold leading-none mr-6 select-none">+</span>
            <div>
                <div class="text-3xl font-extrabold leading-tight">
                    <span class="text-[#1c3556]">BENEDICTO</span>
                    <span class="text-[#f9b233]">C</span>
                    <span class="text-[#1c3556]">OLLEGE</span>
                </div>
                <div class="text-5xl font-extrabold text-black tracking-wide mt-2 drop-shadow">SCHOOL CLINIC</div>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md bg-white bg-opacity-90 rounded-xl shadow-lg p-8 flex flex-col gap-6 mt-4">
            @csrf
            <input type="text" name="username" placeholder="Username" required autofocus
                class="rounded-lg border border-gray-300 px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-gray-100">
            <input type="password" name="password" placeholder="Password" required
                class="rounded-lg border border-gray-300 px-4 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-400 bg-gray-100">
            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-800 to-blue-400 text-white font-bold py-3 rounded-full text-lg shadow hover:from-blue-900 hover:to-blue-500 transition">
                Log in
            </button>
        </form>
    </div>
    <div class="absolute bottom-6 right-8 flex items-center space-x-2 text-gray-700 text-base z-20">
        <span>❓</span> Need help?
    </div>
</div>
@endsection