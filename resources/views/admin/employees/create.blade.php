<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Employee') }}
            </h2>
            <a href="{{ route('admin.employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Employees
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.employees.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Full Name *
                                </label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Enter employee's full name">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email Address *
                                </label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="employee@example.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                    Password *
                                </label>
                                <input type="password" id="password" name="password" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Minimum 8 characters">
                                <p class="text-sm text-gray-500 mt-1">Employee will use this to login to their dashboard</p>
                            </div>

                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-2">
                                    Employee Role *
                                </label>
                                <select id="role" name="role" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Select a role</option>
                                    <option value="waiter" {{ old('role') == 'waiter' ? 'selected' : '' }}>
                                        🍽️ Waiter - Manages orders and customer service
                                    </option>
                                    <option value="chef" {{ old('role') == 'chef' ? 'selected' : '' }}>
                                        👨‍🍳 Chef - Manages kitchen and food preparation
                                    </option>
                                    <option value="inventory_manager" {{ old('role') == 'inventory_manager' ? 'selected' : '' }}>
                                        📦 Inventory Manager - Manages stock and supplies
                                    </option>
                                    <option value="receptionist" {{ old('role') == 'receptionist' ? 'selected' : '' }}>
                                        🏨 Receptionist - Manages room bookings and front desk
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Role Permissions</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <h4 class="font-semibold text-blue-700">🍽️ Waiter</h4>
                                    <ul class="text-blue-600 ml-4 list-disc">
                                        <li>Take and manage customer orders</li>
                                        <li>Update order status</li>
                                        <li>View menu items</li>
                                        <li>Customer service</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-700">👨‍🍳 Chef</h4>
                                    <ul class="text-blue-600 ml-4 list-disc">
                                        <li>View incoming orders</li>
                                        <li>Update cooking status</li>
                                        <li>Manage kitchen operations</li>
                                        <li>Food preparation tracking</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-700">📦 Inventory Manager</h4>
                                    <ul class="text-blue-600 ml-4 list-disc">
                                        <li>Manage inventory items</li>
                                        <li>Track stock levels</li>
                                        <li>Generate inventory reports</li>
                                        <li>Update supply information</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-blue-700">🏨 Receptionist</h4>
                                    <ul class="text-blue-600 ml-4 list-disc">
                                        <li>Manage room bookings</li>
                                        <li>Check-in/check-out guests</li>
                                        <li>Handle front desk operations</li>
                                        <li>Customer inquiries</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.employees.index') }}" 
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                                Create Employee
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

