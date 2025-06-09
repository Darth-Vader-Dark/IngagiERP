<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuItems = [
            // Traditional Rwandan Main Dishes
            [
                'name' => 'Ubugali (Ugali)',
                'description' => 'Traditional Rwandan staple made from maize flour, served with vegetables and meat.',
                'price' => 3500, // RWF
                'category' => 'Main Dishes',
                'is_available' => true,
            ],
            [
                'name' => 'Igikoma (Beef Stew)',
                'description' => 'Tender beef stew cooked with traditional Rwandan spices and vegetables.',
                'price' => 8500, // RWF
                'category' => 'Main Dishes',
                'is_available' => true,
            ],
            [
                'name' => 'Inyama n\'Amaru (Meat with Vegetables)',
                'description' => 'Grilled meat served with fresh local vegetables and traditional sauce.',
                'price' => 7500, // RWF
                'category' => 'Main Dishes',
                'is_available' => true,
            ],
            [
                'name' => 'Ubwoba (Mushroom Stew)',
                'description' => 'Delicious mushroom stew with local herbs and spices.',
                'price' => 4500, // RWF
                'category' => 'Main Dishes',
                'is_available' => true,
            ],
            [
                'name' => 'Igikoma cy\'Ifi (Fish Stew)',
                'description' => 'Fresh fish from Lake Kivu cooked in traditional Rwandan style.',
                'price' => 9500, // RWF
                'category' => 'Main Dishes',
                'is_available' => true,
            ],

            // Traditional Sides and Vegetables
            [
                'name' => 'Ibirayi (Sweet Potatoes)',
                'description' => 'Boiled or roasted sweet potatoes, a traditional Rwandan side dish.',
                'price' => 2000, // RWF
                'category' => 'Sides',
                'is_available' => true,
            ],
            [
                'name' => 'Amaru (Vegetables)',
                'description' => 'Mixed local vegetables cooked with traditional spices.',
                'price' => 2500, // RWF
                'category' => 'Sides',
                'is_available' => true,
            ],
            [
                'name' => 'Ubuki (Honey)',
                'description' => 'Pure local honey from Rwandan beekeepers.',
                'price' => 1500, // RWF
                'category' => 'Sides',
                'is_available' => true,
            ],

            // Traditional Drinks
            [
                'name' => 'Urwagwa (Banana Beer)',
                'description' => 'Traditional Rwandan banana beer, naturally fermented.',
                'price' => 3000, // RWF
                'category' => 'Traditional Drinks',
                'is_available' => true,
            ],
            [
                'name' => 'Ikigage (Sorghum Beer)',
                'description' => 'Traditional sorghum beer with authentic Rwandan taste.',
                'price' => 2800, // RWF
                'category' => 'Traditional Drinks',
                'is_available' => true,
            ],
            [
                'name' => 'Ikivuguto (Fermented Milk)',
                'description' => 'Traditional fermented milk drink, rich in probiotics.',
                'price' => 2000, // RWF
                'category' => 'Traditional Drinks',
                'is_available' => true,
            ],

            // Modern Beverages
            [
                'name' => 'Mutzig Beer',
                'description' => 'Popular Rwandan beer, crisp and refreshing.',
                'price' => 2500, // RWF
                'category' => 'Beverages',
                'is_available' => true,
            ],
            [
                'name' => 'Primus Beer',
                'description' => 'Classic Rwandan lager beer.',
                'price' => 2500, // RWF
                'category' => 'Beverages',
                'is_available' => true,
            ],
            [
                'name' => 'Fanta Passion',
                'description' => 'Passion fruit flavored soft drink, popular in Rwanda.',
                'price' => 1500, // RWF
                'category' => 'Beverages',
                'is_available' => true,
            ],
            [
                'name' => 'Fresh Passion Juice',
                'description' => 'Freshly squeezed passion fruit juice.',
                'price' => 2200, // RWF
                'category' => 'Beverages',
                'is_available' => true,
            ],
            [
                'name' => 'Rwandan Coffee',
                'description' => 'Premium Rwandan coffee, world-renowned for its quality.',
                'price' => 2800, // RWF
                'category' => 'Beverages',
                'is_available' => true,
            ],

            // Desserts
            [
                'name' => 'Ubwoba bw\'Ubuki (Honey Cake)',
                'description' => 'Traditional honey cake made with local honey and spices.',
                'price' => 3500, // RWF
                'category' => 'Desserts',
                'is_available' => true,
            ],
            [
                'name' => 'Amashaza (Milk Sweets)',
                'description' => 'Traditional milk-based sweets with local flavors.',
                'price' => 2500, // RWF
                'category' => 'Desserts',
                'is_available' => true,
            ],

            // International Options
            [
                'name' => 'Grilled Tilapia',
                'description' => 'Fresh tilapia from Lake Kivu, grilled to perfection.',
                'price' => 12000, // RWF
                'category' => 'International',
                'is_available' => true,
            ],
            [
                'name' => 'Chicken Curry',
                'description' => 'Spiced chicken curry with rice and vegetables.',
                'price' => 8000, // RWF
                'category' => 'International',
                'is_available' => true,
            ],
            [
                'name' => 'Vegetarian Pasta',
                'description' => 'Pasta with fresh local vegetables and herbs.',
                'price' => 6500, // RWF
                'category' => 'International',
                'is_available' => true,
            ],
        ];

        foreach ($menuItems as $item) {
            MenuItem::create($item);
        }
    }
}

