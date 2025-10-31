@extends('layouts.app')

@section('title', 'Medicine Management')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-clinic-dark">Medicine Management</h1>
    </div>

    @if(session('status'))
        <div class="bg-clinic-green/10 border border-clinic-green text-clinic-green px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <!-- Tab Navigation -->
    <div class="bg-white rounded-t-xl shadow-md">
        <div class="flex border-b border-gray-200">
            <a href="{{ route('medicines.index', ['tab' => 'inventory']) }}" 
               class="px-6 py-4 text-sm font-medium {{ $tab === 'inventory' ? 'border-b-2 border-clinic-blue text-clinic-blue bg-clinic-blue/5' : 'text-gray-500 hover:text-gray-700' }}">
                <i class="fas fa-pills mr-2"></i>Medicine Inventory
            </a>
            <a href="{{ route('medicines.index', ['tab' => 'orders']) }}" 
               class="px-6 py-4 text-sm font-medium {{ $tab === 'orders' ? 'border-b-2 border-clinic-orange text-clinic-orange bg-clinic-orange/5' : 'text-gray-500 hover:text-gray-700' }}">
                <i class="fas fa-truck mr-2"></i>Medicine Orders
            </a>
            <a href="{{ route('medicines.index', ['tab' => 'dispensed']) }}" 
               class="px-6 py-4 text-sm font-medium {{ $tab === 'dispensed' ? 'border-b-2 border-clinic-green text-clinic-green bg-clinic-green/5' : 'text-gray-500 hover:text-gray-700' }}">
                <i class="fas fa-hand-holding-medical mr-2"></i>Dispensed Medicines
            </a>
        </div>
    </div>

    <!-- Tab Contents -->
    <div class="bg-white rounded-b-xl shadow-md">
        <!-- Medicine Inventory Tab -->
        <div class="p-6 {{ $tab !== 'inventory' ? 'hidden' : '' }}">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-clinic-dark">Medicine Inventory</h2>
                <a href="{{ route('medicines.create', ['type' => 'medicine']) }}"
                   class="px-4 py-2 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80 transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Medicine
                </a>
            </div>

            @if($medicines->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Medicine Name</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock Quantity</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expiration Date</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">    
                            @foreach($medicines as $medicine)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $medicine->name }}</td>
                                <td class="px-4 py-4 text-sm text-gray-600"> 
                                    <span class="px-2 py-1 rounded-full text-xs {{ $medicine->stock_quantity <= 10 ? 'bg-clinic-red/10 text-clinic-red' : 'bg-clinic-green/10 text-clinic-green' }}">
                                        {{ $medicine->stock_quantity }} units
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-600"> 
                                    {{ $medicine->expiration_date ? $medicine->expiration_date->format('M d, Y') : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-sm">
                                    @if($medicine->expiration_date && $medicine->expiration_date->isPast())
                                        <span class="px-2 py-1 rounded-full text-xs bg-clinic-red/10 text-clinic-red">Expired</span>
                                    @elseif($medicine->stock_quantity <= 10) 
                                        <span class="px-2 py-1 rounded-full text-xs bg-clinic-orange/10 text-clinic-orange">Low Stock</span>
                                    @else
                                        <span class="px-2 py-1 rounded-full text-xs bg-clinic-green/10 text-clinic-green">Available</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm font-medium">   
                                    <a href="{{ route('medicines.edit', ['medicine' => $medicine->medicine_id, 'type' => 'medicine']) }}"
                                       class="text-clinic-blue hover:text-clinic-blue/80 mr-3">Edit</a>
                                    <form action="{{ route('medicines.destroy', $medicine->medicine_id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="type" value="medicine">
                                        <input type="hidden" name="return_tab" value="inventory">
                                        <button type="submit" class="text-clinic-red hover:text-clinic-red/80"
                                                onclick="return confirm('Are you sure you want to delete this medicine?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-8">
                    <i class="fas fa-pills text-4xl text-gray-300 mb-4"></i> 
                    <p class="text-gray-500">No medicines in inventory yet.</p>
                    <a href="{{ route('medicines.create', ['type' => 'medicine']) }}"
                       class="mt-4 inline-block px-4 py-2 bg-clinic-blue text-white rounded-lg hover:bg-clinic-blue/80">
                        Add First Medicine
                    </a>
                </div>
            @endif
        </div>

        <!-- Medicine Orders Tab -->
        <div class="p-6 {{ $tab !== 'orders' ? 'hidden' : '' }}">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-clinic-dark">Medicine Orders</h2>
                <a href="{{ route('medicines.create', ['type' => 'order']) }}"
                   class="px-4 py-2 bg-clinic-orange text-white rounded-lg hover:bg-clinic-orange/80 transition-colors">
                    <i class="fas fa-plus mr-2"></i>Add Order
                </a>
            </div>

            @if($medicineOrders->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Medicine</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Received</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Medicine Received</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">    
                            @foreach($medicineOrders as $order)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 text-sm font-medium text-gray-900">
                                    {{ $order->medicine ? $order->medicine->name : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-600"> 
                                    {{ $order->date_received ? $order->date_received->format('M d, Y H:i') : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-600">{{ $order->medicine_received }}</td>
                                <td class="px-4 py-4 text-sm font-medium">   
                                    <a href="{{ route('medicines.edit', ['medicine' => $order->medicineorder_id, 'type' => 'order']) }}"
                                       class="text-clinic-orange hover:text-clinic-orange/80 mr-3">Edit</a>
                                    <form action="{{ route('medicines.destroy', $order->medicineorder_id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="type" value="order">
                                        <input type="hidden" name="return_tab" value="orders">
                                        <button type="submit" class="text-clinic-red hover:text-clinic-red/80"
                                                onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-8">
                    <i class="fas fa-truck text-4xl text-gray-300 mb-4"></i> 
                    <p class="text-gray-500">No medicine orders recorded yet.</p>
                    <a href="{{ route('medicines.create', ['type' => 'order']) }}"
                       class="mt-4 inline-block px-4 py-2 bg-clinic-orange text-white rounded-lg hover:bg-clinic-orange/80">
                        Add First Order
                    </a>
                </div>
            @endif
        </div>

        <!-- Dispensed Medicines Tab -->
        <div class="p-6 {{ $tab !== 'dispensed' ? 'hidden' : '' }}">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-clinic-dark">Dispensed Medicines</h2>
                <a href="{{ route('medicines.create', ['type' => 'dispensed']) }}"
                   class="px-4 py-2 bg-clinic-green text-white rounded-lg hover:bg-clinic-green/80 transition-colors">
                    <i class="fas fa-plus mr-2"></i>Record Dispensed
                </a>
            </div>

            @if($visitMedicines->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Medicine</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visit ID</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity Given</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">    
                            @foreach($visitMedicines as $visitMedicine)      
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 text-sm font-medium text-gray-900">
                                    {{ $visitMedicine->medicine ? $visitMedicine->medicine->name : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-600">#{{ $visitMedicine->visit_id }}</td>
                                <td class="px-4 py-4 text-sm text-gray-600"> 
                                    <span class="px-2 py-1 rounded-full text-xs bg-clinic-green/10 text-clinic-green">
                                        {{ $visitMedicine->quantity_given }} units
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-600"> 
                                    {{ $visitMedicine->created_at ? $visitMedicine->created_at->format('M d, Y') : 'N/A' }}
                                </td>
                                <td class="px-4 py-4 text-sm font-medium">   
                                    <a href="{{ route('medicines.edit', ['medicine' => $visitMedicine->id, 'type' => 'dispensed']) }}"
                                       class="text-clinic-green hover:text-clinic-green/80 mr-3">Edit</a>
                                    <form action="{{ route('medicines.destroy', $visitMedicine->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="type" value="dispensed">
                                        <input type="hidden" name="return_tab" value="dispensed">
                                        <button type="submit" class="text-clinic-red hover:text-clinic-red/80"
                                                onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-8">
                    <i class="fas fa-hand-holding-medical text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">No dispensed medicines recorded yet.</p>
                    <a href="{{ route('medicines.create', ['type' => 'dispensed']) }}"
                       class="mt-4 inline-block px-4 py-2 bg-clinic-green text-white rounded-lg hover:bg-clinic-green/80">
                        Record First Dispensed Medicine
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
