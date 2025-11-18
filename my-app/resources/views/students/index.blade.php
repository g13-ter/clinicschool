@extends('layouts.app')

@section('title', 'Student Management')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-clinic-dark">Student Management</h1>
        <!-- Single primary add button in header -->
        <a href="{{ route('students.create') }}" 
           class="px-6 py-3 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80 transition-colors font-medium shadow-sm">
            <i class="fas fa-user-plus mr-2"></i>Add Student
        </a>
    </div>

    @if(session('status'))
        <div class="bg-clinic-green/10 border border-clinic-green text-clinic-green px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <!-- Student List -->
    <div class="bg-white rounded-xl shadow-md">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-lg font-semibold text-clinic-dark">Student Records</h2>
                    <p class="text-sm text-gray-600">Manage and view all registered students</p>
                </div>
                <!-- Search and Filter Section -->
                <form method="GET" action="{{ route('students.index') }}" class="flex items-center gap-3" id="filterForm">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search students..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue w-64"
                               onkeypress="if(event.key === 'Enter') { event.preventDefault(); this.form.submit(); }">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <select name="course" onchange="this.form.submit()" class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue">
                        <option value="">All Courses</option>
                        @foreach($courses ?? [] as $course)
                            <option value="{{ $course }}" {{ request('course') == $course ? 'selected' : '' }}>
                                {{ $course }}
                            </option>
                        @endforeach
                    </select>
                    @if(request('search') || request('course'))
                        <a href="{{ route('students.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors text-sm">
                            Clear Filters
                        </a>
                    @endif
                </form>
            </div>
            
            <!-- Students Table -->
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">STUDENT ID</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">STUDENT NO.</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">FIRST NAME</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">LAST NAME</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">AGE</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">GUARDIAN CONTACT NO.</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">BIRTHDATE</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">COURSE</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">STATUS</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider border border-gray-300">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($students as $student)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->student_id }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->student_number }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->first_name }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->last_name }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->age ?? 'N/A' }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->guardian_contact ?? 'N/A' }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">
                                    {{ $student->birth_date ? $student->birth_date->format('m.d.Y') : 'N/A' }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 border border-gray-300">{{ $student->course ?? 'N/A' }}</td>
                                <td class="px-4 py-3 whitespace-nowrap border border-gray-300">
                                    @if($student->is_active ?? true)
                                        <span class="px-2 py-1 inline-flex text-xs font-semibold text-green-800 uppercase">
                                            ACTIVE
                                        </span>
                                    @else
                                        <span class="px-2 py-1 inline-flex text-xs font-semibold text-red-800 uppercase">
                                            INACTIVE
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm font-medium border border-gray-300">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('students.edit', $student->id) }}" 
                                           class="inline-flex items-center px-3 py-1.5 bg-clinic-blue text-white text-xs font-medium rounded-md hover:bg-clinic-blue/80 transition-colors"
                                           title="Edit Student">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this student? This action cannot be undone.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white text-xs font-medium rounded-md hover:bg-red-700 transition-colors"
                                                    title="Delete Student">
                                                <i class="fas fa-trash mr-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="px-4 py-16">
                                    <div class="text-center">
                                        <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-clinic-blue/10 to-clinic-blue/20 rounded-full flex items-center justify-center">
                                            <i class="fas fa-graduation-cap text-3xl text-clinic-blue"></i>
                                        </div>
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3">No Students Found</h3>
                                        <p class="text-gray-500 mb-6 max-w-md mx-auto">
                                            @if(request('course') || request('search'))
                                                No students match your filter criteria. Try adjusting your search or filter options.
                                            @else
                                                Your student database is empty. Use the "Add Student" button above to add your first student.
                                            @endif
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
