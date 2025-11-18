@extends('layouts.app')

@section('title', 'Edit Clinic Visit')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Form Header -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-clinic-blue/10 to-clinic-blue/20 rounded-full flex items-center justify-center">
            <i class="fas fa-edit text-2xl text-clinic-blue"></i>
        </div>
        <h2 class="text-2xl font-bold text-clinic-dark">Edit Clinic Visit</h2>
        <p class="text-gray-600 mt-2">Update clinic visit details below</p>
    </div>
    
    <form method="POST" action="{{ route('clinic-visits.update', $visit->id) }}" class="space-y-8 bg-white rounded-xl shadow-md p-6">
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
        
        <!-- Patient Information Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                <i class="fas fa-user text-clinic-blue mr-2"></i>
                Patient Information
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Student *</label>
                    <select name="student_id" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors">
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ old('student_id', $visit->student_id) == $student->id ? 'selected' : '' }}>
                                {{ $student->student_id }} - {{ $student->first_name }} {{ $student->last_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('student_id')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Visit Date *</label>
                    <input type="date" name="visit_date" value="{{ old('visit_date', $visit->visit_date ? $visit->visit_date->format('Y-m-d') : '') }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors">
                    @error('visit_date')
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
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Complaint</label>
                    <textarea name="complaint" rows="3"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                              placeholder="Enter patient's complaint or reason for visit...">{{ old('complaint', $visit->complaint) }}</textarea>
                    @error('complaint')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Diagnosis</label>
                    <textarea name="diagnosis" rows="3"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                              placeholder="Enter diagnosis...">{{ old('diagnosis', $visit->diagnosis) }}</textarea>
                    @error('diagnosis')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Treatment</label>
                    <textarea name="treatment" rows="3"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                              placeholder="Enter treatment provided...">{{ old('treatment', $visit->treatment) }}</textarea>
                    @error('treatment')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Notes</label>
                    <textarea name="notes" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-clinic-blue focus:border-clinic-blue transition-colors" 
                              placeholder="Enter any additional notes...">{{ old('notes', $visit->notes) }}</textarea>
                    @error('notes')
                        <p class="text-clinic-red text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center gap-4 pt-6 border-t">
            <button type="submit" 
                    class="px-8 py-3 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80 transition-colors font-medium shadow-sm">
                <i class="fas fa-save mr-2"></i>Update Visit
            </button>
            <a href="{{ route('clinic-visits.index') }}" 
               class="px-8 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition-colors font-medium">
                <i class="fas fa-times mr-2"></i>Cancel
            </a>
        </div>
    </form>
</div>
@endsection
