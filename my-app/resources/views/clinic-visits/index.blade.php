@extends('layouts.app')
@section('title', 'Clinic Visits Management')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-clinic-dark">Clinic Visits Management</h1>
        <!-- Single primary add button in header -->
        <a href="{{ route('clinic-visits.create') }}" 
           class="px-6 py-3 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80 transition-colors font-medium shadow-sm">
            <i class="fas fa-plus-circle mr-2"></i>Add Clinic Visit
        </a>
    </div>

    @if(session('status'))
        <div class="bg-clinic-green/10 border border-clinic-green text-clinic-green px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <!-- Clinic Visits List -->
    <div class="bg-white rounded-xl shadow-md">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-lg font-semibold text-clinic-dark">Clinic Visit Records</h2>
                    <p class="text-sm text-gray-600">Manage and view all clinic visits</p>
                </div>
                <!-- Search and Filter Section -->
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <input type="text" placeholder="Search visits..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue w-64">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input type="date" 
                           class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue"
                           placeholder="Filter by date">
                </div>
            </div>
            
            <!-- Clinic Visits Table -->
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visit Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student Name</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Complaint</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Diagnosis</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Treatment</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($visits as $visit)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $visit->visit_date ? $visit->visit_date->format('M d, Y') : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                    @if($visit->student)
                                        {{ $visit->student->first_name }} {{ $visit->student->last_name }}
                                    @else
                                        <span class="text-gray-400">N/A</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-900">
                                    @if($visit->student)
                                        {{ $visit->student->student_id }}
                                    @else
                                        <span class="text-gray-400">N/A</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-900">
                                    <div class="max-w-xs truncate" title="{{ $visit->complaint ?? 'N/A' }}">
                                        {{ $visit->complaint ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-900">
                                    <div class="max-w-xs truncate" title="{{ $visit->diagnosis ?? 'N/A' }}">
                                        {{ $visit->diagnosis ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-900">
                                    <div class="max-w-xs truncate" title="{{ $visit->treatment ?? 'N/A' }}">
                                        {{ $visit->treatment ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('clinic-visits.edit', $visit->id) }}" 
                                           class="inline-flex items-center px-3 py-1.5 bg-clinic-blue text-white text-xs font-medium rounded-md hover:bg-clinic-blue/80 transition-colors"
                                           title="Edit Visit">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('clinic-visits.destroy', $visit->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this clinic visit? This action cannot be undone.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded-md hover:bg-red-700 transition-colors"
                                                    title="Delete Visit">
                                                <i class="fas fa-trash mr-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-16">
                                    <div class="text-center">
                                        <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-clinic-green/10 to-clinic-green/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-stethoscope text-3xl text-clinic-green"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3">No Clinic Visits Found</h3>
                                        <p class="text-gray-500 mb-6 max-w-md mx-auto">
                                            Your clinic visits database is empty. Use the "Add Clinic Visit" button above to record your first visit.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
