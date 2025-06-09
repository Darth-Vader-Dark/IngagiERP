<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edit Room Booking") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route("admin.room_bookings.update", $roomBooking->id) }}">
                        @csrf
                        @method("PUT")

                        <!-- Customer Name -->
                        <div>
                            <x-input-label for="customer_name" :value="__("Customer Name")" />
                            <x-text-input id="customer_name" class="block mt-1 w-full" type="text" name="customer_name" :value="old("customer_name", $roomBooking->customer_name)" required autofocus />
                            <x-input-error :messages="$errors->get("customer_name")" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__("Email (Optional)")" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old("email", $roomBooking->email)" />
                            <x-input-error :messages="$errors->get("email")" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__("Phone (Optional)")" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old("phone", $roomBooking->phone)" />
                            <x-input-error :messages="$errors->get("phone")" class="mt-2" />
                        </div>

                        <!-- Room -->
                        <div class="mt-4">
                            <x-input-label for="room_id" :value="__("Room")" />
                            <select id="room_id" name="room_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="">Select Room</option>
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}" {{ old("room_id", $roomBooking->room_id) == $room->id ? "selected" : "" }}>{{ $room->room_number }} ({{ $room->type }} - ${{ $room->price }})</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get("room_id")" class="mt-2" />
                        </div>

                        <!-- Check-in Date -->
                        <div class="mt-4">
                            <x-input-label for="check_in" :value="__("Check-in Date")" />
                            <x-text-input id="check_in" class="block mt-1 w-full" type="date" name="check_in" :value="old("check_in", $roomBooking->check_in)" required />
                            <x-input-error :messages="$errors->get("check_in")" class="mt-2" />
                        </div>

                        <!-- Check-out Date -->
                        <div class="mt-4">
                            <x-input-label for="check_out" :value="__("Check-out Date")" />
                            <x-text-input id="check_out" class="block mt-1 w-full" type="date" name="check_out" :value="old("check_out", $roomBooking->check_out)" required />
                            <x-input-error :messages="$errors->get("check_out")" class="mt-2" />
                        </div>

                        <!-- Payment Status -->
                        <div class="mt-4">
                            <x-input-label for="payment_status" :value="__("Payment Status")" />
                            <select id="payment_status" name="payment_status" class="block mt-1 w-full border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="pending" {{ old("payment_status", $roomBooking->payment_status) == "pending" ? "selected" : "" }}>Pending</option>
                                <option value="paid" {{ old("payment_status", $roomBooking->payment_status) == "paid" ? "selected" : "" }}>Paid</option>
                            </select>
                            <x-input-error :messages="$errors->get("payment_status")" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __("Update Booking") }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


