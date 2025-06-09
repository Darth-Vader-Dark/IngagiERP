<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventoryItems = [
            // Food Ingredients
            [
                'item_name' => 'Maize Flour (Ubugali)',
                'name' => 'Maize Flour (Ubugali)',
                'description' => 'High-quality maize flour for traditional Rwandan dishes',
                'stock_qty' => 150,
                'unit' => 'kg',
                'cost_price' => 800, // RWF per kg
                'selling_price' => 1200, // RWF per kg
                'supplier' => 'Musanze Agricultural Cooperative',
                'category' => 'Food Ingredients',
                'added_by' => 1, // Admin user
            ],
            [
                'item_name' => 'Fresh Beef',
                'name' => 'Fresh Beef',
                'description' => 'Locally sourced fresh beef from Rwandan cattle',
                'stock_qty' => 80,
                'unit' => 'kg',
                'cost_price' => 3500, // RWF per kg
                'selling_price' => 5000, // RWF per kg
                'supplier' => 'Ganza Livestock Market',
                'category' => 'Meat & Poultry',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Fresh Fish (Tilapia)',
                'name' => 'Fresh Fish (Tilapia)',
                'description' => 'Fresh tilapia from Lake Kivu',
                'stock_qty' => 45,
                'unit' => 'kg',
                'cost_price' => 4000, // RWF per kg
                'selling_price' => 6000, // RWF per kg
                'supplier' => 'Lake Kivu Fishermen Cooperative',
                'category' => 'Seafood',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Sweet Potatoes',
                'name' => 'Sweet Potatoes',
                'description' => 'Fresh sweet potatoes from local farms',
                'stock_qty' => 200,
                'unit' => 'kg',
                'cost_price' => 300, // RWF per kg
                'selling_price' => 500, // RWF per kg
                'supplier' => 'Musanze Farmers Market',
                'category' => 'Vegetables',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Local Mushrooms',
                'name' => 'Local Mushrooms',
                'description' => 'Fresh mushrooms from Volcanoes National Park area',
                'stock_qty' => 25,
                'unit' => 'kg',
                'cost_price' => 2000, // RWF per kg
                'selling_price' => 3000, // RWF per kg
                'supplier' => 'Kinigi Mushroom Farmers',
                'category' => 'Vegetables',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Rwandan Coffee Beans',
                'name' => 'Rwandan Coffee Beans',
                'description' => 'Premium Arabica coffee beans from local cooperatives',
                'stock_qty' => 50,
                'unit' => 'kg',
                'cost_price' => 8000, // RWF per kg
                'selling_price' => 12000, // RWF per kg
                'supplier' => 'Musanze Coffee Cooperative',
                'category' => 'Beverages',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Local Honey',
                'name' => 'Local Honey',
                'description' => 'Pure honey from Rwandan beekeepers',
                'stock_qty' => 30,
                'unit' => 'kg',
                'cost_price' => 6000, // RWF per kg
                'selling_price' => 9000, // RWF per kg
                'supplier' => 'Ganza Beekeepers Association',
                'category' => 'Condiments',
                'added_by' => 1,
            ],

            // Beverages
            [
                'item_name' => 'Mutzig Beer',
                'name' => 'Mutzig Beer',
                'description' => 'Popular Rwandan beer bottles',
                'stock_qty' => 240,
                'unit' => 'bottles',
                'cost_price' => 1800, // RWF per bottle
                'selling_price' => 2500, // RWF per bottle
                'supplier' => 'BRALIRWA Distributors',
                'category' => 'Alcoholic Beverages',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Primus Beer',
                'name' => 'Primus Beer',
                'description' => 'Classic Rwandan lager beer',
                'stock_qty' => 180,
                'unit' => 'bottles',
                'cost_price' => 1800, // RWF per bottle
                'selling_price' => 2500, // RWF per bottle
                'supplier' => 'BRALIRWA Distributors',
                'category' => 'Alcoholic Beverages',
                'added_by' => 1,
            ],
            [
                'item_name' => 'Fanta Passion',
                'name' => 'Fanta Passion',
                'description' => 'Passion fruit flavored soft drinks',
                'stock_qty' => 300,
                'unit' => 'bottles',
                'cost_price' => 1000, // RWF per bottle
                'selling_price' => 1500, // RWF per bottle
                'supplier' => 'Coca-Cola Rwanda',
                'category' => 'Soft Drinks',
                'added_by' => 1,
            ],
        ];

        foreach ($inventoryItems as $item) {
            Inventory::create($item);
        }
    }
}

