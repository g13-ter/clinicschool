<x-layouts.app :title="'Report Form - Benedicto College School Clinic'">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-gray-100">
                    <h1 class="text-2xl font-bold text-clinic-dark flex items-center">
                        <span class="mr-3 text-3xl">📈</span>
                        Generate Report
                    </h1>
                </div>

                <form class="space-y-6">
                    <!-- Report Type Selection -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📋</span>
                            Report Type
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Select Report Type</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Report Type</option>
                                    <option value="student_health">Student Health Summary</option>
                                    <option value="clinic_visits">Clinic Visits Report</option>
                                    <option value="medicine_inventory">Medicine Inventory Report</option>
                                    <option value="staff_performance">Staff Performance Report</option>
                                    <option value="monthly_summary">Monthly Summary Report</option>
                                    <option value="emergency_cases">Emergency Cases Report</option>
                                    <option value="vaccination_records">Vaccination Records</option>
                                    <option value="illness_trends">Illness Trends Report</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Report Format</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Format</option>
                                    <option value="pdf">PDF Document</option>
                                    <option value="excel">Excel Spreadsheet</option>
                                    <option value="csv">CSV File</option>
                                    <option value="html">HTML Report</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Date Range -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📅</span>
                            Date Range
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">From Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">To Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Filter Options -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🔍</span>
                            Filter Options
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Grade/Year Level</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">All Grades</option>
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
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">All Genders</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Visit Type</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">All Types</option>
                                    <option value="routine">Routine Check-up</option>
                                    <option value="emergency">Emergency</option>
                                    <option value="injury">Injury</option>
                                    <option value="illness">Illness</option>
                                    <option value="vaccination">Vaccination</option>
                                    <option value="medication">Medication</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Staff Member</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">All Staff</option>
                                    <option value="nurse_kj">Nurse KJ</option>
                                    <option value="nurse_yanna">Nurse Yanna</option>
                                    <option value="dr_clyden">Dr. Clyden</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Report Options -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">⚙️</span>
                            Report Options
                        </h3>
                        <div class="space-y-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Include Charts and Graphs</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Include Summary Statistics</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Include Detailed Records</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Include Recommendations</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Email Report After Generation</span>
                            </label>
                        </div>
                    </div>

                    <!-- Email Options (if email is selected) -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📧</span>
                            Email Options
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Recipient Email</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter recipient email">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Subject Line</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter email subject">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Additional Message</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="Enter additional message for the email"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Generate Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
