<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Room Booking Details</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <h2 class="text-2xl font-bold text-center mb-4">Room Booking Details</h2>

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

                @if ($roomBooking->qr_code_path)
                    <div class="mt-6 text-center">
                        <h3 class="text-xl font-semibold mb-2">QR Code for this Booking</h3>
                        <img src="{{ asset($roomBooking->qr_code_path) }}" alt="QR Code" class="mx-auto" style="width: 200px; height: 200px;">
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Scan this QR code for quick access to booking details.</p>
                    </div>
                @endif

                <div class="mt-6 text-center">
                    <a href="/" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Back to Home</a>
                </div>
            </div>
        </div>
    </body>
</html>


