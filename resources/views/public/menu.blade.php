<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Traditional Menu - INGAGI ERP</title>
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
                    <a href="/hotels" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Hotels</a>
                    <a href="/menu" class="text-green-600 px-3 py-2 rounded-md text-sm font-medium font-semibold">Restaurant</a>
                    <a href="/contact" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700">Staff Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-orange-500 to-red-600 rwandan-pattern pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    🍽️ Traditional Rwandan Cuisine
                </h1>
                <p class="text-xl md:text-2xl text-orange-100 mb-8 max-w-3xl mx-auto">
                    Taste the authentic flavors of the Land of a Thousand Hills
                </p>
            </div>
        </div>
    </section>

    <!-- Menu Categories -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Main Dishes -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">🥘 Main Dishes (Indyo Nkuru)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                            <span class="text-6xl">🥘</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ubugali (Ugali)</h3>
                            <p class="text-gray-600 mb-4">Traditional Rwandan staple made from maize flour, served with vegetables and meat. A hearty and filling dish that's the foundation of Rwandan cuisine.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">3,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                            <span class="text-6xl">🥩</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Igikoma (Beef Stew)</h3>
                            <p class="text-gray-600 mb-4">Traditional beef stew slow-cooked with local spices, onions, and tomatoes. Served with ubugali or rice.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">8,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <span class="text-6xl">🐟</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Lake Kivu Tilapia</h3>
                            <p class="text-gray-600 mb-4">Fresh tilapia from Lake Kivu, grilled with traditional herbs and served with steamed vegetables.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">9,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <span class="text-6xl">🥬</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ubwoba (Pumpkin Leaves)</h3>
                            <p class="text-gray-600 mb-4">Traditional pumpkin leaves cooked with groundnuts and served as a nutritious side dish.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">4,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <span class="text-6xl">🍠</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ibirayi (Sweet Potatoes)</h3>
                            <p class="text-gray-600 mb-4">Roasted sweet potatoes from local farms, served with honey and traditional spices.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">2,800 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                            <span class="text-6xl">🍄</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ubunyobwa (Mushrooms)</h3>
                            <p class="text-gray-600 mb-4">Fresh mushrooms from the Volcanoes National Park area, sautéed with local herbs.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">6,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Beverages -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">🍺 Traditional Beverages (Ibinyobwa)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-yellow-300 to-yellow-500 flex items-center justify-center">
                            <span class="text-5xl">🍺</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Urwagwa (Banana Beer)</h3>
                            <p class="text-gray-600 mb-4 text-sm">Traditional fermented banana beer, a cultural staple of Rwanda.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">3,000 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-brown-400 to-brown-600 flex items-center justify-center">
                            <span class="text-5xl">☕</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Rwandan Coffee</h3>
                            <p class="text-gray-600 mb-4 text-sm">Premium Arabica coffee from local cooperatives in Musanze.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">2,500 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                            <span class="text-5xl">🥤</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Fanta Passion</h3>
                            <p class="text-gray-600 mb-4 text-sm">Popular passion fruit flavored soft drink, locally produced.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">1,500 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <span class="text-5xl">🍃</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Ikinyomoro (Herbal Tea)</h3>
                            <p class="text-gray-600 mb-4 text-sm">Traditional herbal tea made from local medicinal plants.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">2,000 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modern Beverages -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">🍻 Modern Beverages</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <span class="text-5xl">🍺</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Mutzig Beer</h3>
                            <p class="text-gray-600 mb-4 text-sm">Popular Rwandan lager beer, perfect with traditional meals.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">2,500 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                            <span class="text-5xl">🍺</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Primus Beer</h3>
                            <p class="text-gray-600 mb-4 text-sm">Classic Rwandan beer with a rich taste and local heritage.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">2,500 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <span class="text-5xl">🥤</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Coca-Cola</h3>
                            <p class="text-gray-600 mb-4 text-sm">Classic Coca-Cola, locally bottled in Rwanda.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">1,200 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-40 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                            <span class="text-5xl">💧</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Nyungwe Water</h3>
                            <p class="text-gray-600 mb-4 text-sm">Pure spring water from Nyungwe Forest.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">800 RWF</span>
                                <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Desserts & Snacks -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">🍯 Desserts & Snacks</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-yellow-300 to-yellow-500 flex items-center justify-center">
                            <span class="text-6xl">🍯</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ubuki (Local Honey)</h3>
                            <p class="text-gray-600 mb-4">Pure honey from Rwandan beekeepers, served with traditional bread.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">4,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-orange-300 to-orange-500 flex items-center justify-center">
                            <span class="text-6xl">🍌</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Igikoma cy'Amaki (Banana Cake)</h3>
                            <p class="text-gray-600 mb-4">Traditional banana cake made with local bananas and spices.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">3,500 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                        <div class="h-48 bg-gradient-to-br from-red-300 to-red-500 flex items-center justify-center">
                            <span class="text-6xl">🥜</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ubinyobwa (Groundnuts)</h3>
                            <p class="text-gray-600 mb-4">Roasted groundnuts from local farms, perfect as a snack.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-green-600">2,000 RWF</span>
                                <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Special Offers -->
    <section class="bg-yellow-50 py-16">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">🎉 Special Offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-2">Traditional Feast</h3>
                    <p class="text-gray-600 mb-4">Complete traditional meal with Ubugali, Igikoma, vegetables, and Urwagwa</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-green-600">15,000 RWF</span>
                        <span class="text-sm text-gray-500 line-through">18,000 RWF</span>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-green-800 mb-2">Coffee Experience</h3>
                    <p class="text-gray-600 mb-4">Rwandan coffee tasting with traditional snacks and honey</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-green-600">8,000 RWF</span>
                        <span class="text-sm text-gray-500 line-through">10,000 RWF</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-green-800 text-white py-16">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-4">Ready to Taste Rwanda?</h2>
            <p class="text-xl text-green-100 mb-8">
                Experience authentic Rwandan flavors prepared with love and tradition
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-green-800 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-50 transition duration-300">
                    Make Reservation
                </a>
                <a href="tel:+250792086409" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                    Call: +250 792 086 409
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

