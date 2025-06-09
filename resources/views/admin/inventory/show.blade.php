<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Inventory Item Details") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <strong>Item Name:</strong> {{ $inventory->item_name }}
                    </div>
                    <div class="mb-4">
                        <strong>Stock Quantity:</strong> {{ $inventory->stock_qty }}
                    </div>
                    <div class="mb-4">
                        <strong>QR Code Value:</strong> {{ $inventory->qr_code_value }}
                    </div>
                    <div class="mb-4">
                        <strong>Added By:</strong> {{ $inventory->addedBy->name ?? "N/A" }}
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route("admin.inventory.edit", $inventory->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <form action="{{ route("admin.inventory.destroy", $inventory->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm("Are you sure?")">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


