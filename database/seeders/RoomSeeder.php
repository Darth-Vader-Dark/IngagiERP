<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'room_number' => 'VIP-001',
                'room_type' => 'Presidential Suite',
                'price' => 150000, // RWF per night
                'description' => 'Luxurious presidential suite with panoramic views of the Virunga Mountains. Features include king-size bed, private balcony, jacuzzi, and traditional Rwandan décor.',
                'amenities' => 'Mountain View, Jacuzzi, Private Balcony, Traditional Décor, Mini Bar, WiFi, AC',
                'status' => 'available',
            ],
            [
                'room_number' => 'DLX-002',
                'room_type' => 'Deluxe Room',
                'price' => 85000, // RWF per night
                'description' => 'Spacious deluxe room with modern amenities and traditional Rwandan artwork. Perfect for business travelers and couples.',
                'amenities' => 'City View, Queen Bed, Work Desk, WiFi, AC, Traditional Art',
                'status' => 'available',
            ],
            [
                'room_number' => 'STD-003',
                'room_type' => 'Standard Room',
                'price' => 55000, // RWF per night
                'description' => 'Comfortable standard room with essential amenities and warm Rwandan hospitality.',
                'amenities' => 'Double Bed, WiFi, AC, Private Bathroom, Local Crafts',
                'status' => 'available',
            ],
            [
                'room_number' => 'FAM-004',
                'room_type' => 'Family Suite',
                'price' => 120000, // RWF per night
                'description' => 'Spacious family suite accommodating up to 6 guests with separate living area and kitchenette.',
                'amenities' => 'Separate Living Area, Kitchenette, 2 Bedrooms, WiFi, AC, Children Play Area',
                'status' => 'available',
            ],
            [
                'room_number' => 'ECO-005',
                'room_type' => 'Eco Lodge',
                'price' => 75000, // RWF per night
                'description' => 'Sustainable eco-lodge room built with local materials and offering an authentic Rwandan experience.',
                'amenities' => 'Eco-Friendly, Local Materials, Garden View, Solar Power, Traditional Furniture',
                'status' => 'available',
            ],
            [
                'room_number' => 'VIP-006',
                'room_type' => 'Honeymoon Suite',
                'price' => 180000, // RWF per night
                'description' => 'Romantic honeymoon suite with private garden, outdoor shower, and stunning lake views.',
                'amenities' => 'Lake View, Private Garden, Outdoor Shower, Romantic Setup, Champagne Service',
                'status' => 'available',
            ],
            [
                'room_number' => 'BUS-007',
                'room_type' => 'Business Room',
                'price' => 95000, // RWF per night
                'description' => 'Modern business room with high-speed internet, work station, and meeting facilities.',
                'amenities' => 'High-Speed WiFi, Work Station, Meeting Table, Business Center Access, Printer',
                'status' => 'available',
            ],
            [
                'room_number' => 'TRD-008',
                'room_type' => 'Traditional Hut',
                'price' => 65000, // RWF per night
                'description' => 'Authentic traditional Rwandan hut experience with modern comfort and cultural immersion.',
                'amenities' => 'Traditional Architecture, Cultural Experience, Modern Bathroom, Local Guides',
                'status' => 'available',
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}

