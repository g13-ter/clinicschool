<ul class="list-none p-0 m-0 space-y-1">
    <li class="{{ request()->routeIs('dashboard') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">🏠</span>Dashboard
        </a>
    </li>
    <li class="{{ request()->routeIs('students.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('students.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">👥</span>Students
        </a>
    </li>
    <li class="{{ request()->routeIs('clinic-visits.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('clinic-visits.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">➕</span>Clinic Visits
        </a>
    </li>
    <li class="{{ request()->routeIs('medicines.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('medicines.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">💊</span>Medicine
        </a>
    </li>
    <li class="{{ request()->routeIs('staff.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('staff.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">🧑‍⚕️</span>Staff
        </a>
    </li>
    <li class="{{ request()->routeIs('reports.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('reports.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">📊</span>Reports
        </a>
    </li>
    <li class="{{ request()->routeIs('settings.*') ? 'bg-gray-100 rounded' : '' }}">
        <a href="{{ route('settings.index') }}" class="flex items-center px-4 py-3 hover:bg-gray-50 rounded">
            <span class="mr-3">⚙️</span>Settings
        </a>
    </li>
</ul>

