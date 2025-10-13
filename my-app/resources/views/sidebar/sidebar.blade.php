<div class="w-64 bg-gray-50 border-r border-gray-200 min-h-screen">
    <ul class="list-none p-0 m-0">
        <li class="border-b border-gray-200">
            @php $isDashboard = request()->routeIs('dashboard'); @endphp
            <a href="{{ route('dashboard') }}" class="flex items-center px-5 py-4 transition-all duration-300 font-semibold {{ $isDashboard ? 'text-white bg-clinic-blue hover:bg-blue-600' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">📊</span>
                <span class="font-bold text-lg">Dashboard</span>
            </a>
        </li>
        @if (Route::has('students.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('students.*'); @endphp
            <a href="{{ route('students.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">👥</span>
                <span class="font-medium">Students</span>
            </a>
        </li>
        @endif
        @if (Route::has('visits.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('visits.*'); @endphp
            <a href="{{ route('visits.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">🏥</span>
                <span class="font-medium">Clinic Visits</span>
            </a>
        </li>
        @endif
        @if (Route::has('medicines.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('medicines.*'); @endphp
            <a href="{{ route('medicines.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">💊</span>
                <span class="font-medium">Medicine</span>
            </a>
        </li>
        @endif
        @if (Route::has('staff.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('staff.*'); @endphp
            <a href="{{ route('staff.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">👨‍⚕️</span>
                <span class="font-medium">Staff</span>
            </a>
        </li>
        @endif
        @if (Route::has('reports.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('reports.*'); @endphp
            <a href="{{ route('reports.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">📈</span>
                <span class="font-medium">Reports</span>
            </a>
        </li>
        @endif
        @if (Route::has('settings.index'))
        <li class="border-b border-gray-200">
            @php $isActive = request()->routeIs('settings.*'); @endphp
            <a href="{{ route('settings.index') }}" class="flex items-center px-5 py-4 transition-all duration-300 {{ $isActive ? 'bg-gray-100 text-clinic-blue' : 'text-gray-700 hover:bg-gray-100 hover:text-clinic-blue' }}">
                <span class="mr-3 text-lg">⚙️</span>
                <span class="font-medium">Settings</span>
            </a>
        </li>
        @endif
    </ul>
</div>


