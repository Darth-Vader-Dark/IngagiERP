<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edit Inventory Item") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route("admin.inventory.update", $inventory->id) }}">
                        @csrf
                        @method("PUT")

                        <!-- Item Name -->
                        <div>
                            <x-input-label for="item_name" :value="__("Item Name")" />
                            <x-text-input id="item_name" class="block mt-1 w-full" type="text" name="item_name" :value="old("item_name", $inventory->item_name)" required autofocus />
                            <x-input-error :messages="$errors->get("item_name")" class="mt-2" />
                        </div>

                        <!-- Stock Quantity -->
                        <div class="mt-4">
                            <x-input-label for="stock_qty" :value="__("Stock Quantity")" />
                            <x-text-input id="stock_qty" class="block mt-1 w-full" type="number" name="stock_qty" :value="old("stock_qty", $inventory->stock_qty)" required min="0" />
                            <x-input-error :messages="$errors->get("stock_qty")" class="mt-2" />
                        </div>

                        <!-- QR Code Value -->
                        <div class="mt-4">
                            <x-input-label for="qr_code_value" :value="__("QR Code Value (Optional)")" />
                            <x-text-input id="qr_code_value" class="block mt-1 w-full" type="text" name="qr_code_value" :value="old("qr_code_value", $inventory->qr_code_value)" />
                            <x-input-error :messages="$errors->get("qr_code_value")" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __("Update Item") }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


