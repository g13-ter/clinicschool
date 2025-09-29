<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Visit Form - Benedicto College School Clinic</title>
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
                    <a href="{{ route('dashboard') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">📊</span>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.student') }}" class="flex items-center px-5 py-4 text-gray-700 hover:bg-gray-100 hover:text-clinic-blue transition-all duration-300">
                        <span class="mr-3 text-lg">👥</span>
                        <span class="font-medium">Students</span>
                    </a>
                </li>
                <li class="border-b border-gray-200">
                    <a href="{{ route('forms.clinic') }}" class="flex items-center px-5 py-4 text-white bg-clinic-blue hover:bg-blue-600 transition-all duration-300 font-semibold">
                        <span class="mr-3 text-lg">🏥</span>
                        <span class="font-bold text-lg">Clinic Visits</span>
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
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-gray-100">
                    <h1 class="text-2xl font-bold text-clinic-dark flex items-center">
                        <span class="mr-3 text-3xl">🏥</span>
                        Clinic Visit Form
                    </h1>
                </div>

                <form class="space-y-6">
                    <!-- Patient Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">👤</span>
                            Patient Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Student ID">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Student Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Student Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Grade/Year Level</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Grade/Year</option>
                                    <option value="grade1">Grade 1</option>
                                    <option value="grade2">Grade 2</option>
                                    <option value="grade3">Grade 3</option>
                                    <option value="grade4">Grade 4</option>
                                    <option value="grade5">Grade 5</option>
                                    <option value="grade6">Grade 6</option>
                                    <option value="grade7">Grade 7</option>
                                    <option value="grade8">Grade 8</option>
                                    <option value="grade9">Grade 9</option>
                                    <option value="grade10">Grade 10</option>
                                    <option value="grade11">Grade 11</option>
                                    <option value="grade12">Grade 12</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Section</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Section">
                            </div>
                        </div>
                    </div>

                    <!-- Visit Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📅</span>
                            Visit Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Visit Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Visit Time</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Visit Type</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Visit Type</option>
                                    <option value="routine">Routine Check-up</option>
                                    <option value="emergency">Emergency</option>
                                    <option value="injury">Injury</option>
                                    <option value="illness">Illness</option>
                                    <option value="vaccination">Vaccination</option>
                                    <option value="medication">Medication</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Priority Level</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Symptoms & Complaints -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🤒</span>
                            Symptoms & Complaints
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Chief Complaint</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Describe the main reason for the visit"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Symptoms</label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Fever
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Headache
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Nausea
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Dizziness
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Cough
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Sore Throat
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Stomach Pain
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2"> Fatigue
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Symptoms</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="2" placeholder="Describe any other symptoms"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Vital Signs -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📊</span>
                            Vital Signs
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Temperature (°C)</label>
                                <input type="number" step="0.1" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="36.5">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Blood Pressure</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="120/80">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pulse Rate (bpm)</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="72">
                            </div>
                        </div>
                    </div>

                    <!-- Assessment & Treatment -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🩺</span>
                            Assessment & Treatment
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Assessment</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Medical assessment and diagnosis"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Treatment Given</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Treatment provided"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Medication Prescribed</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="2" placeholder="Medications prescribed"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Follow-up Instructions</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="2" placeholder="Follow-up care instructions"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Staff Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">👨‍⚕️</span>
                            Staff Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Attending Staff</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Staff Member</option>
                                    <option value="nurse_kj">Nurse KJ</option>
                                    <option value="nurse_yanna">Nurse Yanna</option>
                                    <option value="dr_clyden">Dr. Clyden</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Staff Signature</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Staff signature">
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Save Visit Record
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
