<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Employee Management') }}
            </h2>
            <a href="{{ route('admin.employees.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                ➕ Add New Employee
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <div class="flex">
                                <div class="py-1">
                                    <span class="text-xl mr-2">✅</span>
                                </div>
                                <div>
                                    <p class="font-bold">Success!</p>
                                    <p class="text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($employees->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($employees as $employee)
                                <div class="bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                    <div class="p-6">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="flex items-center">
                                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                                    {{ strtoupper(substr($employee->name, 0, 1)) }}
                                                </div>
                                                <div class="ml-3">
                                                    <h3 class="text-lg font-semibold text-gray-900">{{ $employee->name }}</h3>
                                                    <p class="text-sm text-gray-600">{{ $employee->email }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            @php
                                                $roleInfo = [
                                                    'waiter' => ['icon' => '🍽️', 'name' => 'Waiter', 'color' => 'bg-green-100 text-green-800'],
                                                    'chef' => ['icon' => '👨‍🍳', 'name' => 'Chef', 'color' => 'bg-orange-100 text-orange-800'],
                                                    'inventory_manager' => ['icon' => '📦', 'name' => 'Inventory Manager', 'color' => 'bg-blue-100 text-blue-800'],
                                                    'receptionist' => ['icon' => '🏨', 'name' => 'Receptionist', 'color' => 'bg-purple-100 text-purple-800'],
                                                ];
                                                $role = $roleInfo[$employee->role] ?? ['icon' => '👤', 'name' => ucfirst($employee->role), 'color' => 'bg-gray-100 text-gray-800'];
                                            @endphp
                                            
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $role['color'] }}">
                                                <span class="mr-1">{{ $role['icon'] }}</span>
                                                {{ $role['name'] }}
                                            </span>
                                        </div>

                                        <div class="text-sm text-gray-600 mb-4">
                                            <p><span class="font-semibold">Joined:</span> {{ $employee->created_at->format('M d, Y') }}</p>
                                            <p><span class="font-semibold">Last Updated:</span> {{ $employee->updated_at->format('M d, Y') }}</p>
                                        </div>

                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.employees.show', $employee) }}" 
                                               class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-2 px-3 rounded text-sm font-medium transition duration-300">
                                                View
                                            </a>
                                            <a href="{{ route('admin.employees.edit', $employee) }}" 
                                               class="flex-1 bg-yellow-600 hover:bg-yellow-700 text-white text-center py-2 px-3 rounded text-sm font-medium transition duration-300">
                                                Edit
                                            </a>
                                            <form action="{{ route('admin.employees.destroy', $employee) }}" method="POST" class="flex-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        onclick="return confirm('Are you sure you want to delete this employee?')"
                                                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-3 rounded text-sm font-medium transition duration-300">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">📊 Employee Statistics</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @php
                                    $roleCounts = $employees->groupBy('role')->map->count();
                                @endphp
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600">{{ $roleCounts->get('waiter', 0) }}</div>
                                    <div class="text-sm text-gray-600">🍽️ Waiters</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-orange-600">{{ $roleCounts->get('chef', 0) }}</div>
                                    <div class="text-sm text-gray-600">👨‍🍳 Chefs</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600">{{ $roleCounts->get('inventory_manager', 0) }}</div>
                                    <div class="text-sm text-gray-600">📦 Inventory Managers</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-purple-600">{{ $roleCounts->get('receptionist', 0) }}</div>
                                    <div class="text-sm text-gray-600">🏨 Receptionists</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <div class="text-6xl mb-4">👥</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">No Employees Yet</h3>
                            <p class="text-gray-600 mb-6">Start building your team by adding your first employee.</p>
                            <a href="{{ route('admin.employees.create') }}" 
                               class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                                ➕ Add First Employee
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

