<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edit Employee") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route("admin.employees.update", $employee->id) }}">
                        @csrf
                        @method("PUT")

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__("Name")" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old("name", $employee->name)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get("name")" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__("Email")" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old("email", $employee->email)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get("email")" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__("Password")" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />

                            <x-input-error :messages="$errors->get("password")" class="mt-2" />
                            <div class="text-sm text-gray-600 dark:text-gray-400 mt-2">Leave blank to keep current password.</div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__("Confirm Password")" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />

                            <x-input-error :messages="$errors->get("password_confirmation")" class="mt-2" />
                        </div>

                        <!-- Role -->
                        <div class="mt-4">
                            <x-input-label for="role" :value="__("Role")" />
                            <select id="role" name="role" class="block mt-1 w-full border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="">Select Role</option>
                                <option value="waiter" {{ old("role", $employee->role) == "waiter" ? "selected" : "" }}>Waiter</option>
                                <option value="chef" {{ old("role", $employee->role) == "chef" ? "selected" : "" }}>Chef</option>
                                <option value="inventory_manager" {{ old("role", $employee->role) == "inventory_manager" ? "selected" : "" }}>Inventory Manager</option>
                                <option value="receptionist" {{ old("role", $employee->role) == "receptionist" ? "selected" : "" }}>Receptionist</option>
                            </select>
                            <x-input-error :messages="$errors->get("role")" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __("Update Employee") }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


