@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Form Header -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-clinic-blue/10 to-clinic-blue/20 rounded-full flex items-center justify-center">
            <i class="fas fa-user-edit text-2xl text-clinic-blue"></i>
        </div>
        <h2 class="text-2xl font-bold text-clinic-dark">Edit Student Information</h2>
        <p class="text-gray-600 mt-2">Update student details below</p>
    </div>
    
    <form method="POST" action="{{ route('students.update', $student->id) }}" class="space-y-8 bg-white rounded-xl shadow-md p-6">
            @csrf
            @method('PUT')
        
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                <p class="font-semibold mb-2">Please fix the following errors:</p>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Personal Information Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-user text-clinic-blue mr-2"></i>
                Personal Information
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                    <input type="text" name="first_name" value="{{ old('first_name', $student->first_name) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="Enter first name">
                    @error('first_name')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                    <input type="text" name="last_name" value="{{ old('last_name', $student->last_name) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="Enter last name">
                    @error('last_name')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Birth Date *</label>
                    <input type="date" name="birth_date" value="{{ old('birth_date', $student->birth_date ? $student->birth_date->format('Y-m-d') : '') }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors">
                    @error('birth_date')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gender *</label>
                    <select name="gender" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors">
                        <option value="">Select Gender</option>
                        <option value="Male" {{ old('gender', $student->gender) === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $student->gender) === 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Academic Information Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-graduation-cap text-clinic-green mr-2"></i>
                Academic Information
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student ID *</label>
                    <input type="text" name="student_id" value="{{ old('student_id', $student->student_id) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="e.g., 2024-00001">
                    @error('student_id')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student Number *</label>
                    <input type="text" name="student_number" value="{{ old('student_number', $student->student_number) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="e.g., 2024001">
                    @error('student_number')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Course *</label>
                    <select name="course" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors">
                        <option value="">Select Course</option>
                        <option value="BSIT" {{ old('course', $student->course) === 'BSIT' ? 'selected' : '' }}>Bachelor of Science in Information Technology</option>
                        <option value="BSED" {{ old('course', $student->course) === 'BSED' ? 'selected' : '' }}>Bachelor of Secondary Education</option>
                        <option value="BSHM" {{ old('course', $student->course) === 'BSHM' ? 'selected' : '' }}>Bachelor of Science in Hospitality Management</option>
                        <option value="BSA" {{ old('course', $student->course) === 'BSA' ? 'selected' : '' }}>Bachelor of Science in Accountancy</option>
                        <option value="BSHRDM" {{ old('course', $student->course) === 'BSHRDM' ? 'selected' : '' }}>Bachelor of Science in Human Resource Development Management</option>
                        <option value="BSME" {{ old('course', $student->course) === 'BSME' ? 'selected' : '' }}>Bachelor of Science in Mechanical Engineering</option>
                        <option value="BSCE" {{ old('course', $student->course) === 'BSCE' ? 'selected' : '' }}>Bachelor of Science in Civil Engineering</option>
                        <option value="BSIE" {{ old('course', $student->course) === 'BSIE' ? 'selected' : '' }}>Bachelor of Science in Industrial Engineering</option>
                    </select>
                    @error('course')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Age</label>
                    <input type="number" name="age" value="{{ old('age', $student->age) }}" min="15" max="50"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="Auto-calculated from birth date" readonly>
                    @error('age')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Grade Level</label>
                    <input type="text" name="grade_level" value="{{ old('grade_level', $student->grade_level) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="e.g., Grade 12">
                    @error('grade_level')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Section</label>
                    <input type="text" name="section" value="{{ old('section', $student->section) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="e.g., A, B, C">
                    @error('section')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-phone text-clinic-orange mr-2"></i>
                Contact Information
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Guardian Contact Number *</label>
                    <input type="text" name="guardian_contact" value="{{ old('guardian_contact', $student->guardian_contact) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="e.g., 09123456789">
                    @error('guardian_contact')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Contact Number</label>
                    <input type="text" name="contact_number" value="{{ old('contact_number', $student->contact_number) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="Student's contact number">
                    @error('contact_number')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Contact</label>
                    <input type="text" name="emergency_contact" value="{{ old('emergency_contact', $student->emergency_contact) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                           placeholder="Alternative contact number">
                    @error('emergency_contact')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Medical Information Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-heartbeat text-clinic-red mr-2"></i>
                Medical Information
            </h3>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Medical Notes</label>
                <textarea name="medical_notes" rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                          placeholder="Enter any medical notes, allergies, or important health information...">{{ old('medical_notes', $student->medical_notes) }}</textarea>
                @error('medical_notes')
                    <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                @enderror
    </div>
</div>

        <!-- Status Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-toggle-on text-clinic-green mr-2"></i>
                Status
            </h3>
            
            <div class="flex items-center">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" 
                           {{ old('is_active', $student->is_active ?? true) ? 'checked' : '' }}
                           class="w-5 h-5 text-clinic-blue border-gray-300 rounded focus:ring-clinic-blue focus:ring-2">
                    <span class="ml-3 text-sm font-medium text-gray-700">
                        Active Student
                    </span>
                </label>
                <p class="ml-4 text-xs text-gray-500">
                    (Uncheck to mark student as inactive)
                </p>
            </div>
            @error('is_active')
                <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center gap-4 pt-6 border-t">
            <button type="submit" 
                    class="px-8 py-3 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80 transition-colors font-medium shadow-sm">
                <i class="fas fa-save mr-2"></i>Update Student
            </button>
            <a href="{{ route('students.index') }}" 
               class="px-8 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors font-medium">
                <i class="fas fa-times mr-2"></i>Cancel
        </a>
    </div>
        </form>
    </div>

<script>
    // Auto-calculate age from birth date
    document.addEventListener('DOMContentLoaded', function() {
        const birthDateInput = document.querySelector('input[name="birth_date"]');
        const ageInput = document.querySelector('input[name="age"]');
        
        if (birthDateInput && ageInput) {
            // Calculate age on page load
            if (birthDateInput.value) {
                calculateAge(birthDateInput.value, ageInput);
            }
            
            // Calculate age when birth date changes
            birthDateInput.addEventListener('change', function() {
                calculateAge(this.value, ageInput);
            });
        }
        
        function calculateAge(birthDateValue, ageInput) {
            if (!birthDateValue) return;
            
            const birthDate = new Date(birthDateValue);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            ageInput.value = age;
        }
    });
</script>
@endsection
