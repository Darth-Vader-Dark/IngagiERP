<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotels & Accommodations - INGAGI ERP</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .rwandan-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23fbbf24' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold text-green-800">🏨 INGAGI ERP</a>
                        <span class="ml-2 text-sm text-gray-600">Musanze, Rwanda</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/hotels" class="text-green-600 px-3 py-2 rounded-md text-sm font-medium font-semibold">Hotels</a>
                    <a href="/menu" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Restaurant</a>
                    <a href="/contact" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700">Staff Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-green-800 rwandan-pattern pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    🏨 Our Accommodations
                </h1>
                <p class="text-xl md:text-2xl text-green-100 mb-8 max-w-3xl mx-auto">
                    Experience authentic Rwandan hospitality with breathtaking views of the Virunga Mountains
                </p>
            </div>
        </div>
    </section>

    <!-- Hotels Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Presidential Suite -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center relative">
                        <span class="text-8xl">🏰</span>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
                            VIP
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Presidential Suite</h3>
                        <p class="text-gray-600 mb-4">Luxurious presidential suite with panoramic views of the Virunga Mountains. Features include king-size bed, private balcony, jacuzzi, and traditional Rwandan décor.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Mountain View</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Jacuzzi</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Private Balcony</span>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Traditional Décor</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">150,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Honeymoon Suite -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-pink-400 to-red-500 flex items-center justify-center relative">
                        <span class="text-8xl">💕</span>
                        <div class="absolute top-4 right-4 bg-pink-400 text-pink-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Romance
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Honeymoon Suite</h3>
                        <p class="text-gray-600 mb-4">Romantic honeymoon suite with private garden, outdoor shower, and stunning lake views.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Lake View</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Private Garden</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Outdoor Shower</span>
                                <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Romantic Setup</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">180,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Family Suite -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center relative">
                        <span class="text-8xl">👨‍👩‍👧‍👦</span>
                        <div class="absolute top-4 right-4 bg-orange-400 text-orange-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Family
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Family Suite</h3>
                        <p class="text-gray-600 mb-4">Spacious family suite accommodating up to 6 guests with separate living area and kitchenette.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Separate Living Area</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Kitchenette</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">2 Bedrooms</span>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Play Area</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">120,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Business Room -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-gray-500 to-gray-700 flex items-center justify-center relative">
                        <span class="text-8xl">💼</span>
                        <div class="absolute top-4 right-4 bg-gray-400 text-gray-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Business
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Business Room</h3>
                        <p class="text-gray-600 mb-4">Modern business room with high-speed internet, work station, and meeting facilities.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">High-Speed WiFi</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Work Station</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Meeting Table</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">Printer Access</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">95,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Deluxe Room -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center relative">
                        <span class="text-8xl">🛏️</span>
                        <div class="absolute top-4 right-4 bg-indigo-400 text-indigo-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Deluxe
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Deluxe Room</h3>
                        <p class="text-gray-600 mb-4">Spacious deluxe room with modern amenities and traditional Rwandan artwork. Perfect for business travelers and couples.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">City View</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Queen Bed</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Work Desk</span>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Traditional Art</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">85,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Eco Lodge -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center relative">
                        <span class="text-8xl">🌿</span>
                        <div class="absolute top-4 right-4 bg-green-400 text-green-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Eco-Friendly
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Eco Lodge</h3>
                        <p class="text-gray-600 mb-4">Sustainable eco-lodge room built with local materials and offering an authentic Rwandan experience.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Eco-Friendly</span>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Local Materials</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Garden View</span>
                                <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">Solar Power</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">75,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Traditional Hut -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-yellow-500 to-orange-500 flex items-center justify-center relative">
                        <span class="text-8xl">🏡</span>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Traditional
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Traditional Hut</h3>
                        <p class="text-gray-600 mb-4">Authentic traditional Rwandan hut experience with modern comfort and cultural immersion.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Traditional Architecture</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Cultural Experience</span>
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Modern Bathroom</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Local Guides</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">65,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Standard Room -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-64 bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center relative">
                        <span class="text-8xl">🛌</span>
                        <div class="absolute top-4 right-4 bg-teal-400 text-teal-900 px-3 py-1 rounded-full text-sm font-semibold">
                            Standard
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Standard Room</h3>
                        <p class="text-gray-600 mb-4">Comfortable standard room with essential amenities and warm Rwandan hospitality.</p>
                        <div class="mb-4">
                            <h4 class="font-semibold text-gray-900 mb-2">Amenities:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Double Bed</span>
                                <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">WiFi</span>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">AC</span>
                                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Local Crafts</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-3xl font-bold text-green-600">55,000 RWF</span>
                                <span class="text-gray-500 text-sm block">per night</span>
                            </div>
                            <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-green-800 text-white py-16">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-4">Ready to Experience Rwanda?</h2>
            <p class="text-xl text-green-100 mb-8">
                Book your stay today and immerse yourself in authentic Rwandan hospitality
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-green-800 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-50 transition duration-300">
                    Contact Us
                </a>
                <a href="tel:+250792086409" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                    Call Now: +250 792 086 409
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4">🏨 INGAGI ERP</h3>
                <p class="text-gray-400 mb-4">Experience Rwanda's Hospitality in Musanze</p>
                <p class="text-gray-500 text-sm">
                    © {{ date('Y') }} INGAGI ERP. All rights reserved. | Proudly Rwandan 🇷🇼
                </p>
            </div>
        </div>
    </footer>
</body>
</html>

