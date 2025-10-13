<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
        <input name="student_id" value="{{ old('student_id') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Student ID">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
        <input name="name" value="{{ old('name') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Enter Full Name">
    </div>
</div>

