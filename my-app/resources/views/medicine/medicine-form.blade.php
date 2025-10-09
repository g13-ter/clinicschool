<x-layouts.app :title="'Medicine Form - Benedicto College School Clinic'">
    <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="flex items-center justify-between mb-6 pb-4 border-b-2 border-gray-100">
                    <h1 class="text-2xl font-bold text-clinic-dark flex items-center">
                        <span class="mr-3 text-3xl">💊</span>
                        Medicine Inventory Form
                    </h1>
                </div>

                <form class="space-y-6">
                    <!-- Medicine Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">💊</span>
                            Medicine Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Medicine Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Medicine Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Generic Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Generic Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Medicine Type</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Medicine Type</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="capsule">Capsule</option>
                                    <option value="syrup">Syrup</option>
                                    <option value="injection">Injection</option>
                                    <option value="cream">Cream</option>
                                    <option value="ointment">Ointment</option>
                                    <option value="drops">Drops</option>
                                    <option value="spray">Spray</option>
                                    <option value="powder">Powder</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Dosage Form</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="e.g., 500mg, 10ml">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Manufacturer</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Manufacturer">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Batch Number</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Batch Number">
                            </div>
                        </div>
                    </div>

                    <!-- Stock Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📦</span>
                            Stock Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Current Stock</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Minimum Stock Level</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Maximum Stock Level</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <!-- Expiry & Storage -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📅</span>
                            Expiry & Storage Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Manufacturing Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Expiry Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Storage Temperature</label>
                                <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                                    <option value="">Select Storage Temperature</option>
                                    <option value="room_temp">Room Temperature (15-25°C)</option>
                                    <option value="refrigerated">Refrigerated (2-8°C)</option>
                                    <option value="frozen">Frozen (-20°C)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Storage Location</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="e.g., Medicine Cabinet A, Shelf 1">
                            </div>
                        </div>
                    </div>

                    <!-- Usage Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">📋</span>
                            Usage Information
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Indications</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="What conditions this medicine treats"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Dosage Instructions</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="3" placeholder="How to take this medicine"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Contraindications</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="2" placeholder="When not to use this medicine"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Side Effects</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" rows="2" placeholder="Possible side effects"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Supplier Information -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold text-clinic-dark mb-4 flex items-center">
                            <span class="mr-2">🏢</span>
                            Supplier Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Supplier Name</label>
                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="Enter Supplier Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Purchase Date</label>
                                <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Purchase Price</label>
                                <input type="number" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0.00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Quantity Purchased</label>
                                <input type="number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-clinic-blue focus:border-transparent" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex justify-end gap-4 pt-6 border-t border-gray-200">
                        <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2 bg-clinic-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                            Save Medicine
                        </button>
                    </div>
                </form>
            </div>
    </div>
</x-layouts.app>
