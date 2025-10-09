<x-layouts.app :title="'Settings - Benedicto College School Clinic'">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-gray-100">
                    <h1 class="text-2xl font-bold text-clinic-dark flex items-center">
                        <span class="mr-3 text-3xl">⚙️</span>
                        System Settings
                    </h1>
                </div>

                <form class="space-y-6">
                    <!-- General Settings -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🏥</span>
                            General Settings
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Clinic Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="Benedicto College School Clinic">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Clinic Address</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Clinic Address">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Phone Number">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Email Address">
                            </div>
                        </div>
                    </div>

                    <!-- Operating Hours -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🕒</span>
                            Operating Hours
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Opening Time</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="07:00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Closing Time</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="17:00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lunch Break Start</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="12:00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lunch Break End</label>
                                <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="13:00">
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Settings -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🚨</span>
                            Emergency Settings
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Contact Number</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Emergency Contact">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nearest Hospital</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Nearest Hospital">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Hospital Contact</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Hospital Contact">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ambulance Service</label>
                                <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Ambulance Service">
                            </div>
                        </div>
                    </div>

                    <!-- Notification Settings -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🔔</span>
                            Notification Settings
                        </h3>
                        <div class="space-y-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded" checked>
                                <span class="text-sm text-gray-700">Low Medicine Stock Alerts</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded" checked>
                                <span class="text-sm text-gray-700">Expired Medicine Alerts</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded" checked>
                                <span class="text-sm text-gray-700">Emergency Case Notifications</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Daily Summary Reports</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-3 rounded">
                                <span class="text-sm text-gray-700">Weekly Inventory Reports</span>
                            </label>
                        </div>
                    </div>

                    <!-- Backup Settings -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">💾</span>
                            Backup & Security
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Auto Backup Frequency</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="manual">Manual Only</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Session Timeout (minutes)</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" value="30" min="5" max="480">
                            </div>
                            <div class="flex items-center gap-4">
                                <button type="button" class="px-4 py-2 bg-clinic-green text-white rounded-lg hover:bg-green-600 transition-colors">
                                    Create Backup Now
                                </button>
                                <button type="button" class="px-4 py-2 bg-clinic-orange text-white rounded-lg hover:bg-orange-600 transition-colors">
                                    Restore Backup
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- User Preferences -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">👤</span>
                            User Preferences
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Language</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="en">English</option>
                                    <option value="fil">Filipino</option>
                                    <option value="ceb">Cebuano</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Theme</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                    <option value="auto">Auto</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Date Format</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="mm/dd/yyyy">MM/DD/YYYY</option>
                                    <option value="dd/mm/yyyy">DD/MM/YYYY</option>
                                    <option value="yyyy-mm-dd">YYYY-MM-DD</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Time Format</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="12">12 Hour (AM/PM)</option>
                                    <option value="24">24 Hour</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Reset to Default
                        </button>
                        <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Save Settings
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
