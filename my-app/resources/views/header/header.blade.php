<!-- Header -->
<div class="bg-clinic-dark text-white p-2 shadow-lg flex justify-between items-center fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center gap-3">
        <div class="w-8 h-8 bg-clinic-blue rounded-full flex items-center justify-center text-white font-bold text-lg">+</div>
        <div>
            <div class="text-base font-bold leading-tight">
                <span class="text-clinic-blue">B</span>ENEDICTO <span class="text-clinic-orange">C</span>OLLEGE SCHOOL CLINIC
            </div>
            <div class="flex items-center gap-2 mt-0.5">
                <span class="text-xs">Welcome, {{ Auth::user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-clinic-red text-white px-2 py-0.5 rounded text-xs hover:bg-red-600 transition-colors">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <div class="flex items-center gap-3">
        <div class="relative">
            <input type="text" placeholder="Search" class="bg-gray-100 border-none px-3 py-1 rounded-full w-40 text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-clinic-blue text-xs">
            <div class="absolute right-2 top-1 text-gray-500 text-xs">🔍</div>
        </div>
        <div class="flex gap-1">
            <div class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-gray-600 text-xs">●</div>
            <div class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-red text-xs">💊</div>
            <div class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-purple text-xs">🎧</div>
            <div class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-orange text-xs">🚑</div>
            <div class="w-6 h-6 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-green text-xs">📄</div>
        </div>
    </div>
</div>