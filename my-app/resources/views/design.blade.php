<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Design - Benedicto College School Clinic</title>
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
    <div class="bg-clinic-dark text-white p-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-clinic-blue rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">+</div>
                <div>
                    <div class="text-2xl font-bold">
                        <span class="text-clinic-blue">B</span>ENEDICTO <span class="text-clinic-orange">C</span>OLLEGE
                    </div>
                    <div class="text-lg font-bold">SCHOOL CLINIC - DESIGN STUDIO</div>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-sm">Welcome, {{ Auth::user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-clinic-red text-white px-3 py-1 rounded text-sm hover:bg-red-600 transition-colors">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Design Studio Header -->
        <div class="bg-white rounded-xl p-6 shadow-md mb-6">
            <h1 class="text-3xl font-bold text-clinic-dark mb-2">🎨 Clinic Design Studio</h1>
            <p class="text-gray-600">Design and customize your clinic management system</p>
        </div>

        <!-- Design Categories -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Students Management -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-clinic-blue rounded-lg flex items-center justify-center text-white text-2xl mr-4">👥</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Students</h3>
                </div>
                <p class="text-gray-600 mb-4">Manage student records, health profiles, and medical history</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-blue rounded-full mr-2"></span>
                        Student Registration
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-blue rounded-full mr-2"></span>
                        Health Records
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-blue rounded-full mr-2"></span>
                        Medical History
                    </div>
                </div>
                <button class="mt-4 w-full bg-clinic-blue text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors">
                    Design Students Module
                </button>
            </div>

            <!-- Clinic Visits -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-clinic-green rounded-lg flex items-center justify-center text-white text-2xl mr-4">🏥</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Clinic Visits</h3>
                </div>
                <p class="text-gray-600 mb-4">Track and manage all clinic visits and appointments</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-green rounded-full mr-2"></span>
                        Visit Scheduling
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-green rounded-full mr-2"></span>
                        Treatment Records
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-green rounded-full mr-2"></span>
                        Follow-up Tracking
                    </div>
                </div>
                <button class="mt-4 w-full bg-clinic-green text-white py-2 px-4 rounded-lg hover:bg-green-600 transition-colors">
                    Design Visits Module
                </button>
            </div>

            <!-- Medicine Management -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-clinic-red rounded-lg flex items-center justify-center text-white text-2xl mr-4">💊</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Medicine</h3>
                </div>
                <p class="text-gray-600 mb-4">Manage medicine inventory, prescriptions, and stock levels</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-red rounded-full mr-2"></span>
                        Inventory Management
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-red rounded-full mr-2"></span>
                        Prescription Tracking
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-red rounded-full mr-2"></span>
                        Stock Alerts
                    </div>
                </div>
                <button class="mt-4 w-full bg-clinic-red text-white py-2 px-4 rounded-lg hover:bg-red-600 transition-colors">
                    Design Medicine Module
                </button>
            </div>

            <!-- Staff Management -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-clinic-purple rounded-lg flex items-center justify-center text-white text-2xl mr-4">👨‍⚕️</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Staff</h3>
                </div>
                <p class="text-gray-600 mb-4">Manage clinic staff, schedules, and responsibilities</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-purple rounded-full mr-2"></span>
                        Staff Directory
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-purple rounded-full mr-2"></span>
                        Schedule Management
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-purple rounded-full mr-2"></span>
                        Role Assignments
                    </div>
                </div>
                <button class="mt-4 w-full bg-clinic-purple text-white py-2 px-4 rounded-lg hover:bg-purple-600 transition-colors">
                    Design Staff Module
                </button>
            </div>

            <!-- Reports & Analytics -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-clinic-orange rounded-lg flex items-center justify-center text-white text-2xl mr-4">📈</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Reports</h3>
                </div>
                <p class="text-gray-600 mb-4">Generate reports and analytics for clinic operations</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-orange rounded-full mr-2"></span>
                        Health Statistics
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-orange rounded-full mr-2"></span>
                        Visit Reports
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-clinic-orange rounded-full mr-2"></span>
                        Medicine Usage
                    </div>
                </div>
                <button class="mt-4 w-full bg-clinic-orange text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition-colors">
                    Design Reports Module
                </button>
            </div>

            <!-- Settings & Configuration -->
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center text-white text-2xl mr-4">⚙️</div>
                    <h3 class="text-xl font-bold text-clinic-dark">Settings</h3>
                </div>
                <p class="text-gray-600 mb-4">Configure system settings and preferences</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-gray-600 rounded-full mr-2"></span>
                        System Configuration
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-gray-600 rounded-full mr-2"></span>
                        User Permissions
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="w-2 h-2 bg-gray-600 rounded-full mr-2"></span>
                        Backup & Security
                    </div>
                </div>
                <button class="mt-4 w-full bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                    Design Settings Module
                </button>
            </div>
        </div>

        <!-- Design Tools -->
        <div class="bg-white rounded-xl p-6 shadow-md">
            <h2 class="text-2xl font-bold text-clinic-dark mb-4">🛠️ Design Tools</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-lg font-semibold mb-2">Color Palette</h3>
                    <p class="text-gray-600 mb-4">Customize the clinic's color scheme</p>
                    <div class="flex justify-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-clinic-blue rounded-full"></div>
                        <div class="w-8 h-8 bg-clinic-green rounded-full"></div>
                        <div class="w-8 h-8 bg-clinic-red rounded-full"></div>
                        <div class="w-8 h-8 bg-clinic-orange rounded-full"></div>
                        <div class="w-8 h-8 bg-clinic-purple rounded-full"></div>
                    </div>
                    <button class="bg-clinic-blue text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        Customize Colors
                    </button>
                </div>

                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="text-lg font-semibold mb-2">Layout Designer</h3>
                    <p class="text-gray-600 mb-4">Design the dashboard layout and navigation</p>
                    <button class="bg-clinic-green text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                        Design Layout
                    </button>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8 bg-white rounded-xl p-6 shadow-md">
            <h2 class="text-2xl font-bold text-clinic-dark mb-4">⚡ Quick Actions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <button class="bg-gradient-to-r from-clinic-blue to-blue-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">
                    🚀 Start New Design
                </button>
                <button class="bg-gradient-to-r from-clinic-green to-green-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">
                    💾 Save Current Design
                </button>
                <button class="bg-gradient-to-r from-clinic-orange to-orange-600 text-white p-4 rounded-lg text-center font-semibold hover:transform hover:-translate-y-1 hover:shadow-lg transition-all">
                    🔄 Reset to Default
                </button>
            </div>
        </div>
    </div>
</body>
</html>
