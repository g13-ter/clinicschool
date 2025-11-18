@extends('layouts.app')

@section('content')
<!-- Top Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
    <!-- Total Students -->
    <div class="bg-white rounded-xl p-6 shadow-md text-center">
        <div class="w-16 h-16 mx-auto mb-3 bg-clinic-blue/10 rounded-full flex items-center justify-center">
            <img src="{{ asset('images/reading-book.png') }}" alt="Students" class="w-8 h-8">
        </div>
        <div class="text-3xl font-bold text-clinic-dark">{{ $totalStudents ?? 0 }}</div>
        <div class="text-sm text-gray-600">Total Students</div>
    </div>
    
    <!-- Number of Medications -->
    <div class="bg-white rounded-xl p-6 shadow-md text-center">
        <div class="w-16 h-16 mx-auto mb-3 bg-clinic-red/10 rounded-full flex items-center justify-center">
            <img src="{{ asset('images/medicine.png') }}" alt="Medicine" class="w-8 h-8">
        </div>
        <div class="text-3xl font-bold text-clinic-dark">{{ $totalMedicines ?? 0 }}</div>
        <div class="text-sm text-gray-600">Number of Medications</div>
    </div>
    
    <!-- Clinic Visits -->
    <div class="bg-white rounded-xl p-6 shadow-md text-center">
        <div class="w-16 h-16 mx-auto mb-3 bg-clinic-green/10 rounded-full flex items-center justify-center">
            <img src="{{ asset('images/stethoscope.png') }}" alt="Clinic Visits" class="w-8 h-8">
        </div>
        <div class="text-3xl font-bold text-clinic-dark">{{ $totalClinicVisits ?? 0 }}</div>
        <div class="text-sm text-gray-600">Clinic Visits</div>
    </div>
    
    <!-- Emergency Cases -->
    <div class="bg-white rounded-xl p-6 shadow-md text-center">
        <div class="w-16 h-16 mx-auto mb-3 bg-clinic-red/10 rounded-full flex items-center justify-center">
            <img src="{{ asset('images/first-aid-kit.png') }}" alt="Emergency" class="w-8 h-8">
        </div>
        <div class="text-3xl font-bold text-clinic-dark">{{ $emergencyCases ?? 0 }}</div>
        <div class="text-sm text-gray-600">Emergency Cases</div>
    </div>
    
    <!-- Referral -->
    <div class="bg-white rounded-xl p-6 shadow-md text-center">
        <div class="w-16 h-16 mx-auto mb-3 bg-clinic-purple/10 rounded-full flex items-center justify-center">
            <img src="{{ asset('images/reffer.png') }}" alt="Referral" class="w-8 h-8">
        </div>
        <div class="text-3xl font-bold text-clinic-dark">{{ $referrals ?? 0 }}</div>
        <div class="text-sm text-gray-600">Referral</div>
    </div>
</div>

<!-- Middle Section - 3 Columns Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <!-- Quick Action Panel - Column 1 -->
    <div class="lg:col-span-1">
        <div class="bg-clinic-blue/10 rounded-xl p-6 shadow-md h-full">
            <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                <div class="w-6 h-6 bg-clinic-blue rounded-full flex items-center justify-center mr-2">
                    <i class="fas fa-bolt text-white text-xs"></i>
                </div>
                Quick Action
            </h3>
            <div class="space-y-3">
                <a href="{{ route('students.create') }}" class="flex items-center p-3 bg-white rounded-lg hover:bg-clinic-blue/5 hover:border-clinic-blue border border-transparent transition-all duration-200 shadow-sm hover:shadow-md">
                    <div class="w-10 h-10 bg-gradient-to-r from-clinic-blue to-clinic-blue/80 rounded-full flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm font-medium text-gray-800">Add New Student</div>
                        <div class="text-xs text-gray-500">Register new student</div>
                    </div>
                </a>
                
                <a href="{{ route('clinic-visits.create') }}" class="flex items-center p-3 bg-white rounded-lg hover:bg-clinic-purple/5 hover:border-clinic-purple border border-transparent transition-all duration-200 shadow-sm hover:shadow-md">
                    <div class="w-10 h-10 bg-gradient-to-r from-clinic-purple to-clinic-purple/80 rounded-full flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm font-medium text-gray-800">Clinic Visits</div>
                        <div class="text-xs text-gray-500">Record patient visit</div>
                    </div>
                </a>
                
                <a href="{{ route('medicines.index') }}" class="flex items-center p-3 bg-white rounded-lg hover:bg-clinic-orange/5 hover:border-clinic-orange border border-transparent transition-all duration-200 shadow-sm hover:shadow-md">
                    <div class="w-10 h-10 bg-gradient-to-r from-clinic-orange to-clinic-orange/80 rounded-full flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm font-medium text-gray-800">Update Medication</div>
                        <div class="text-xs text-gray-500">Manage medicine inventory</div>
                    </div>
                </a>
                
                <a href="#" class="flex items-center p-3 bg-white rounded-lg hover:bg-clinic-red/5 hover:border-clinic-red border border-transparent transition-all duration-200 shadow-sm hover:shadow-md">
                    <div class="w-10 h-10 bg-gradient-to-r from-clinic-red to-clinic-red/80 rounded-full flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm font-medium text-gray-800">Create Referral</div>
                        <div class="text-xs text-gray-500">Medical referral form</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Notifications & Alerts - Column 2 -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-xl p-6 shadow-md h-full">
            <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                <div class="w-6 h-6 bg-clinic-orange rounded-full flex items-center justify-center mr-2">
                    <i class="fas fa-bell text-white text-xs"></i>
                </div>
                Notifications & Alerts
            </h3>
            
            <div class="space-y-4">
                <div class="flex items-start p-4 bg-gradient-to-r from-clinic-red/5 to-clinic-red/10 border-l-4 border-clinic-red rounded-lg shadow-sm">
                    <div class="w-10 h-10 bg-clinic-red rounded-full flex items-center justify-center mr-4 shadow-sm flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-sm text-clinic-red">Low Stock Alert!</div>
                        <div class="text-xs text-gray-600">Medicine A - 5 Remaining</div>
                        <div class="text-xs text-clinic-red font-medium mt-1">Action Required</div>
                    </div>
                </div>
                
                <div class="flex items-start p-4 bg-gradient-to-r from-clinic-blue/5 to-clinic-blue/10 border-l-4 border-clinic-blue rounded-lg shadow-sm">
                    <div class="w-10 h-10 bg-clinic-blue rounded-full flex items-center justify-center mr-4 shadow-sm flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-sm text-clinic-blue">Upcoming Check-up</div>
                        <div class="text-xs text-gray-600">Medical for Players in Intramurals</div>
                        <div class="text-xs text-clinic-blue font-medium mt-1">Tomorrow 9:00 AM</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Monthly Trends - Column 3 -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-xl p-6 shadow-md h-full">
            <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                <div class="w-6 h-6 bg-clinic-purple rounded-full flex items-center justify-center mr-2">
                    <i class="fas fa-chart-bar text-white text-xs"></i>
                </div>
                Monthly Clinic Visits Trend
            </h3>
            <div class="h-40 bg-gradient-to-r from-clinic-blue/20 via-clinic-green/20 to-clinic-orange/20 rounded-lg flex items-end justify-around p-4 border border-gray-100">
                <!-- Enhanced bar chart representation -->
                <div class="flex flex-col items-center">
                    <div class="bg-gradient-to-t from-clinic-blue to-clinic-blue/70 rounded-t w-8 h-24 shadow-sm"></div>
                    <span class="text-xs text-gray-500 mt-2 font-medium">July</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gradient-to-t from-clinic-green to-clinic-green/70 rounded-t w-8 h-32 shadow-sm"></div>
                    <span class="text-xs text-gray-500 mt-2 font-medium">Aug</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gradient-to-t from-clinic-orange to-clinic-orange/70 rounded-t w-8 h-20 shadow-sm"></div>
                    <span class="text-xs text-gray-500 mt-2 font-medium">Sept</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-gradient-to-t from-clinic-purple to-clinic-purple/70 rounded-t w-8 h-36 shadow-sm"></div>
                    <span class="text-xs text-gray-500 mt-2 font-medium">Oct</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Common Illnesses Record -->
    <div class="bg-white rounded-xl p-6 shadow-md">
        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
            <div class="w-6 h-6 bg-clinic-blue rounded-full flex items-center justify-center mr-2">
                <i class="fas fa-chart-pie text-white text-xs"></i>
            </div>
            COMMON ILLNESSES RECORD
        </h3>
        <div class="flex items-center justify-between">
            <div class="w-48 h-48 relative">
                <!-- Enhanced pie chart representation -->
                <div class="w-full h-full rounded-full shadow-lg" style="background: conic-gradient(#3498db 0% 35%, #f39c12 35% 60%, #e74c3c 60% 85%, #2ecc71 85% 100%);">
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white w-20 h-20 rounded-full shadow-inner border-4 border-gray-50"></div>
                </div>
            </div>
            <div class="ml-6 space-y-3">
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-blue rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">35% Fever</span>
                </div>
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-orange rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">25% Headache</span>
                </div>
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-red rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">25% Allergies</span>
                </div>
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-green rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">15% Diarrhea</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contagious Illnesses Record -->
    <div class="bg-white rounded-xl p-6 shadow-md">
        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
            <div class="w-6 h-6 bg-clinic-red rounded-full flex items-center justify-center mr-2">
                <i class="fas fa-virus text-white text-xs"></i>
            </div>
            CONTAGIOUS ILLNESSES RECORD
        </h3>
        <div class="flex items-center justify-between">
            <div class="w-48 h-48 relative">
                <!-- Enhanced pie chart representation -->
                <div class="w-full h-full rounded-full shadow-lg" style="background: conic-gradient(#f39c12 0% 40%, #2ecc71 40% 70%, #3498db 70% 100%);">
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white w-20 h-20 rounded-full shadow-inner border-4 border-gray-50"></div>
                </div>
            </div>
            <div class="ml-6 space-y-3">
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-orange rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">40% Flu</span>
                </div>
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-green rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">30% Chicken Pox</span>
                </div>
                <div class="flex items-center text-sm bg-gray-50 p-2 rounded-lg">
                    <span class="w-4 h-4 bg-clinic-blue rounded-full mr-3 shadow-sm"></span>
                    <span class="font-medium">30% Sore Eyes</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
