<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Benedicto College School Clinic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'clinic-blue': '#3498db',
                        'clinic-orange': '#f39c12',
                        'clinic-red': '#e74c3c',
                        'clinic-green': '#27ae60',
                        'clinic-purple': '#9b59b6',
                        'clinic-dark': '#2c3e50',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <div class="bg-clinic-dark text-white p-3 shadow-lg flex justify-between items-center fixed top-0 left-0 right-0 z-50">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-clinic-blue rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">+</div>
            <div>
                <div class="text-xl font-bold">
                    <span class="text-clinic-blue">B</span>ENEDICTO <span class="text-clinic-orange">C</span>OLLEGE
                </div>
                <div class="text-sm font-bold">SCHOOL CLINIC</div>
                <div class="flex items-center gap-3 mt-1">
                    <span class="text-xs">Welcome, {{ Auth::user()->name }}!</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                        <button type="submit" class="bg-clinic-red text-white px-2 py-1 rounded text-xs hover:bg-red-600 transition-colors">Logout</button>
            </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-end gap-2">
            <div class="relative">
                <input type="text" placeholder="Search" class="bg-gray-100 border-none px-3 py-1.5 rounded-full w-40 text-gray-800 focus:outline-none focus:bg-white focus:ring-2 focus:ring-clinic-blue text-sm">
                <div class="absolute right-2 top-1.5 text-gray-500 text-sm">🔍</div>
            </div>
            <div class="flex gap-1">
                <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-gray-600 text-sm">●</div>
                <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-red text-sm">💊</div>
                <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-purple text-sm">🎧</div>
                <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-orange text-sm">🚑</div>
                <div class="w-7 h-7 bg-gray-100 rounded-lg flex items-center justify-center cursor-pointer hover:bg-clinic-blue hover:text-white transition-all text-clinic-green text-sm">📄</div>
            </div>
        </div>
    </div>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-50 border-r border-gray-200 fixed h-screen overflow-y-auto top-20">
            <ul class="list-none p-0 m-0">
                <li class="border-b border-gray-200">
                    <a href="#" class="flex items-center px-5 py-4 text-white bg-clinic-blue hover:bg-blue-600 transition-all duration-300 font-semibold">
                        <span class="mr-3 text-lg">📊</span>
                        <span class="font-bold text-lg">Dashboard</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.student') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">👥</span>
                        <span class="font-medium">Students</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.clinic') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">🏥</span>
                        <span class="font-medium">Clinic Visits</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.medicine') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">💊</span>
                        <span class="font-medium">Medicine</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.staff') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">👨‍⚕️</span>
                        <span class="font-medium">Staff</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.report') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">📈</span>
                        <span class="font-medium">Reports</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.setting') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">⚙️</span>
                        <span class="font-medium">Settings</span>
                    </a>
                </li>
                @if(Auth::user()->isAdmin())
                <li class="border-b border-gray-200">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">👑</span>
                        <span class="font-medium">Admin Panel</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-5 mt-20">

            <!-- Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-clinic-blue hover:transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Total Students</h3>
                        <span class="text-2xl">👥</span>
                    </div>
                    <div class="text-3xl font-bold text-clinic-dark mb-1">590</div>
                    <div class="text-sm text-clinic-green font-medium">+12% from last month</div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-clinic-red hover:transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Medications</h3>
                        <span class="text-2xl">💊</span>
                    </div>
                    <div class="text-3xl font-bold text-clinic-dark mb-1">30</div>
                    <div class="text-sm text-clinic-green font-medium">+5 new this week</div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-clinic-green hover:transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Clinic Visits</h3>
                        <span class="text-2xl">🏥</span>
                    </div>
                    <div class="text-3xl font-bold text-clinic-dark mb-1">190</div>
                    <div class="text-sm text-clinic-green font-medium">+8% from last month</div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-clinic-orange hover:transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Emergency Cases</h3>
                        <span class="text-2xl">🚨</span>
                    </div>
                    <div class="text-3xl font-bold text-clinic-dark mb-1">20</div>
                    <div class="text-sm text-clinic-red font-medium">-3 from last week</div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-clinic-purple hover:transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Referrals</h3>
                        <span class="text-2xl">📋</span>
                    </div>
                    <div class="text-3xl font-bold text-clinic-dark mb-1">120</div>
                    <div class="text-sm text-clinic-green font-medium">+15% from last month</div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Quick Actions -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="flex items-center justify-between mb-5 pb-4 border-b-2 border-gray-100">
                        <h3 class="text-lg font-bold text-clinic-dark flex items-center">
                            <span class="mr-2">⚡</span>
                            Quick Actions
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <a href="#" class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">Add New Student</a>
                        <a href="#" class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">Add New Staff</a>
                        <a href="#" class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">Clinic Visits</a>
                        <a href="#" class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">Update Medication</a>
                        <a href="#" class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all col-span-2">Create Referral</a>
                    </div>
                </div>

                <!-- Notifications & Alerts -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="flex items-center justify-between mb-5 pb-4 border-b-2 border-gray-100">
                        <h3 class="text-lg font-bold text-clinic-dark flex items-center">
                            <span class="mr-2">🔔</span>
                            Notifications & Alerts
                        </h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center p-3 bg-yellow-50 border-l-4 border-clinic-orange rounded">
                            <span class="mr-3 text-lg text-clinic-orange">💊</span>
                            <div class="text-sm text-yellow-800">Low Stock Alert! Medicine A - 5 Remaining</div>
                        </div>
                        <div class="flex items-center p-3 bg-blue-50 border-l-4 border-clinic-blue rounded">
                            <span class="mr-3 text-lg text-clinic-blue">📅</span>
                            <div class="text-sm text-blue-800">Upcoming Check-up Medical for Players in Intramurals</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staff List -->
            <div class="bg-white rounded-xl p-6 shadow-md mb-8">
                <div class="flex items-center justify-between mb-5 pb-4 border-b-2 border-gray-100">
                    <h3 class="text-lg font-bold text-clinic-dark flex items-center">
                        <span class="mr-2">👥</span>
                        Staff List
                    </h3>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 bg-clinic-blue rounded-full flex items-center justify-center text-white font-bold mr-3">KJ</div>
                        <div>
                            <div class="font-semibold text-clinic-dark">Nurse KJ</div>
                            <div class="text-sm text-gray-500">Senior Nurse</div>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 bg-clinic-green rounded-full flex items-center justify-center text-white font-bold mr-3">Y</div>
                        <div>
                            <div class="font-semibold text-clinic-dark">Nurse Yanna</div>
                            <div class="text-sm text-gray-500">Staff Nurse</div>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-10 h-10 bg-clinic-purple rounded-full flex items-center justify-center text-white font-bold mr-3">C</div>
                        <div>
                            <div class="font-semibold text-clinic-dark">Dr. Clyden</div>
                            <div class="text-sm text-gray-500">School Physician</div>
                        </div>
                    </div>
                </div>
        </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Common Illnesses Chart -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-clinic-dark mb-5 text-center">COMMON ILLNESSES RECORD</h3>
                    <div class="h-48 bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                        <div class="text-gray-500 text-center">
                            <div class="text-4xl mb-2">📊</div>
                            <div>Pie Chart Placeholder</div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-5 mt-4 flex-wrap">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-blue rounded-full"></div>
                            <span class="text-sm text-gray-600">Fever</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-red rounded-full"></div>
                            <span class="text-sm text-gray-600">Headache (70%)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-green rounded-full"></div>
                            <span class="text-sm text-gray-600">Allergies (20%)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-orange rounded-full"></div>
                            <span class="text-sm text-gray-600">Diarrhea (10%)</span>
                        </div>
                    </div>
                </div>

                <!-- Contagious Illnesses Chart -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-bold text-clinic-dark mb-5 text-center">CONTAGIOUS ILLNESSES RECORD</h3>
                    <div class="h-48 bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                        <div class="text-gray-500 text-center">
                            <div class="text-4xl mb-2">📊</div>
                            <div>Pie Chart Placeholder</div>
                        </div>
                    </div>
                    <div class="flex justify-center gap-5 mt-4 flex-wrap">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-orange rounded-full"></div>
                            <span class="text-sm text-gray-600">Flu</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-green rounded-full"></div>
                            <span class="text-sm text-gray-600">Chicken Pox</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-clinic-blue rounded-full"></div>
                            <span class="text-sm text-gray-600">Sore Eyes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
