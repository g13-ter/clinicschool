<!-- Sidebar -->
<div class="w-64 bg-gray-50 border-r border-gray-200 fixed h-screen overflow-y-auto top-16">
    <ul class="list-none p-0 m-0">
        <li class="border-b border-gray-200">
            <a href="{{ route('dashboard') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('dashboard') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300 font-semibold">
                <span class="mr-3 text-lg">📊</span>
                <span class="font-bold text-lg">Dashboard</span>
            </a>
        </li>
        <li class="border-b border-gray-200">
            <a href="{{ route('students.index') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('students.*') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300">
                <span class="mr-3 text-lg">👥</span>
                <span class="font-medium">Students</span>
            </a>
        </li>
        <li class="border-b border-gray-200">
            <a href="{{ route('clinic-visits.index') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('clinic-visits.*') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300">
                <span class="mr-3 text-lg">🏥</span>
                <span class="font-medium">Clinic Visits</span>
            </a>
        </li>
        <li class="border-b border-gray-200">
            <a href="{{ route('medicines.index') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('medicines.*') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300">
                <span class="mr-3 text-lg">💊</span>
                <span class="font-medium">Medicine</span>
            </a>
        </li>
        <li class="border-b border-gray-200">
            <a href="{{ route('reports.index') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('reports.*') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300">
                <span class="mr-3 text-lg">📈</span>
                <span class="font-medium">Reports</span>
            </a>
        </li>
        <li class="border-b border-gray-200">
            <a href="{{ route('settings.index') }}" class="flex items-center px-5 py-4 {{ request()->routeIs('settings.*') ? 'text-white bg-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }} transition-all duration-300">
                <span class="mr-3 text-lg">⚙️</span>
                <span class="font-medium">Settings</span>
            </a>
        </li>
    </ul>
</div>