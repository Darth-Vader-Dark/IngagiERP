<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Order Details</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <h2 class="text-2xl font-bold text-center mb-4">Order Details</h2>

                <div class="mb-4">
                    <strong>Order ID:</strong> {{ $order->id }}
                </div>
                <div class="mb-4">
                    <strong>Table Number:</strong> {{ $order->table_number ?? 'N/A' }}
                </div>
                <div class="mb-4">
                    <strong>Waiter:</strong> {{ $order->waiter->name ?? 'N/A' }}
                </div>
                <div class="mb-4">
                    <strong>Total Amount:</strong> {{ $order->total_amount }}
                </div>
                <div class="mb-4">
                    <strong>Status:</strong> {{ $order->status }}
                </div>

                <h3 class="text-xl font-semibold mb-2">Items:</h3>
                <ul>
                    @foreach ($order->orderItems as $item)
                        <li>{{ $item->quantity }} x {{ $item->menuItem->name }} ({{ $item->price }} each)</li>
                    @endforeach
                </ul>

                @if ($order->qr_code_path)
                    <div class="mt-6 text-center">
                        <h3 class="text-xl font-semibold mb-2">QR Code for this Order</h3>
                        <img src="{{ asset($order->qr_code_path) }}" alt="QR Code" class="mx-auto" style="width: 200px; height: 200px;">
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Scan this QR code for quick access to order details.</p>
                    </div>
                @endif

                <div class="mt-6 text-center">
                    <a href="/" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-600">Back to Home</a>
                </div>
            </div>
        </div>
    </body>
</html>


