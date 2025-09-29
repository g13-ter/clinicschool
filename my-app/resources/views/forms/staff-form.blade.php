<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form - Benedicto College School Clinic</title>
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
                    <a href="{{ route('forms.staff') }}" class="flex items-center px-5 py-4 text-white bg-clinic-blue hover:bg-blue-600 transition-all duration-300 font-semibold">
                        <span class="mr-3 text-lg">👨‍⚕️</span>
                        <span class="font-bold text-lg">Staff</span>
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
                        <span class="mr-3 text-3xl">👨‍⚕️</span>
                        Staff Information Form
                    </h1>
                </div>

                <form class="space-y-6">
                    <!-- Personal Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">👤</span>
                            Personal Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Employee ID</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Employee ID">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Full Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Phone Number">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Email Address">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Home Address</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Enter Complete Home Address"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Professional Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🎓</span>
                            Professional Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Position/Title</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Position</option>
                                    <option value="school_physician">School Physician</option>
                                    <option value="senior_nurse">Senior Nurse</option>
                                    <option value="staff_nurse">Staff Nurse</option>
                                    <option value="nurse_aide">Nurse Aide</option>
                                    <option value="clinic_coordinator">Clinic Coordinator</option>
                                    <option value="administrative_staff">Administrative Staff</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Department" value="School Clinic">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">License Number</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter License Number">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">License Expiry Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Years of Experience</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Specialization</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Specialization">
                            </div>
                        </div>
                    </div>

                    <!-- Employment Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">💼</span>
                            Employment Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Employment Status</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Employment Status</option>
                                    <option value="full_time">Full Time</option>
                                    <option value="part_time">Part Time</option>
                                    <option value="contract">Contract</option>
                                    <option value="consultant">Consultant</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Hire Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Work Schedule</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Work Schedule</option>
                                    <option value="morning">Morning Shift (6AM-2PM)</option>
                                    <option value="afternoon">Afternoon Shift (2PM-10PM)</option>
                                    <option value="night">Night Shift (10PM-6AM)</option>
                                    <option value="flexible">Flexible Hours</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Salary</label>
                                <input type="number" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0.00">
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🚨</span>
                            Emergency Contact
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Contact Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Emergency Contact Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Relationship</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Relationship</option>
                                    <option value="spouse">Spouse</option>
                                    <option value="parent">Parent</option>
                                    <option value="sibling">Sibling</option>
                                    <option value="child">Child</option>
                                    <option value="friend">Friend</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Phone</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Emergency Phone">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Email</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Emergency Email">
                            </div>
                        </div>
                    </div>

                    <!-- Medical Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🏥</span>
                            Medical Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Blood Type</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Blood Type</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Allergies</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Known Allergies">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Medical Conditions</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Enter Any Medical Conditions"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Save Staff
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
