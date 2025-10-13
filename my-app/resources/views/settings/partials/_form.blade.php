<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Key</label>
        <input name="key" value="{{ old('key') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Setting key">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Value</label>
        <input name="value" value="{{ old('value') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg" placeholder="Setting value">
    </div>
</div>

