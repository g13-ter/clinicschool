<div class="bg-clinic-dark text-white p-3 shadow-lg flex justify-between items-center">
    <div class="flex items-center">
        <div class="w-10 h-10 bg-clinic-blue rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">+</div>
        <div>
            <div class="text-xl font-bold">
                <span class="text-clinic-blue">B</span>ENEDICTO <span class="text-clinic-orange">C</span>OLLEGE
            </div>
            <div class="text-sm font-bold">SCHOOL CLINIC</div>
        </div>
        <!-- Removed breadcrumb-style page title to keep header clean across pages -->
    </div>

    <div class="flex items-center gap-3">
        <div class="relative">
            <input type="text" placeholder="Search" class="bg-gray-100 border-none px-3 py-1.5 rounded-full w-40 text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-clinic-blue text-sm">
            <div class="absolute right-2 top-1.5 text-gray-500 text-sm">🔍</div>
        </div>
        <div class="hidden sm:flex gap-1">
            <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-gray-600 text-sm">●</div>
            <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-red text-sm">💊</div>
            <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-purple text-sm">🎧</div>
            <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-orange text-sm">🚑</div>
            <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-green text-sm">📄</div>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="bg-clinic-red text-white px-3 py-1.5 rounded text-xs hover:bg-red-600 transition-colors">Logout</button>
        </form>
    </div>
</div>


