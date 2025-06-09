<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Room Booking Details") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <strong>Customer Name:</strong> {{ $roomBooking->customer_name }}
                    </div>
                    <div class="mb-4">
                        <strong>Email:</strong> {{ $roomBooking->email ?? 'N/A' }}
                    </div>
                    <div class="mb-4">
                        <strong>Phone:</strong> {{ $roomBooking->phone ?? 'N/A' }}
                    </div>
                    <div class="mb-4">
                        <strong>Room Number:</strong> {{ $roomBooking->room->room_number ?? 'N/A' }}
                    </div>
                    <div class="mb-4">
                        <strong>Check-in Date:</strong> {{ $roomBooking->check_in }}
                    </div>
                    <div class="mb-4">
                        <strong>Check-out Date:</strong> {{ $roomBooking->check_out }}
                    </div>
                    <div class="mb-4">
                        <strong>Payment Status:</strong> {{ ucfirst($roomBooking->payment_status) }}
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route("admin.room_bookings.edit", $roomBooking->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <form action="{{ route("admin.room_bookings.destroy", $roomBooking->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


