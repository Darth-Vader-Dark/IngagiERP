<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INGAGI ERP - Experience Rwanda's Hospitality</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .rwandan-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23fbbf24' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .hero-gradient {
            background: linear-gradient(135deg, #065f46 0%, #047857 25%, #059669 50%, #10b981 75%, #34d399 100%);
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
                        <h1 class="text-2xl font-bold text-green-800">🏨 INGAGI ERP</h1>
                        <span class="ml-2 text-sm text-gray-600">Musanze, Rwanda</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#hotels" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Hotels</a>
                    <a href="#menu" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Restaurant</a>
                    <a href="#contact" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700">Staff Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient rwandan-pattern pt-16 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Murakaza Neza! 🇷🇼
                </h1>
                <h2 class="text-2xl md:text-4xl font-semibold text-green-100 mb-8">
                    Welcome to INGAGI ERP
                </h2>
                <p class="text-xl md:text-2xl text-green-50 mb-12 max-w-4xl mx-auto">
                    Experience authentic Rwandan hospitality in the heart of Musanze. 
                    From the majestic Virunga Mountains to traditional cuisine, 
                    discover the Land of a Thousand Hills.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#hotels" class="bg-white text-green-800 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-50 transition duration-300">
                        🏨 Explore Our Hotels
                    </a>
                    <a href="#menu" class="bg-green-800 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-900 transition duration-300">
                        🍽️ Traditional Menu
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose INGAGI ERP?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience the best of Rwandan culture, cuisine, and hospitality in Musanze
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center card-hover bg-green-50 p-8 rounded-xl">
                    <div class="text-4xl mb-4">🏔️</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Mountain Views</h3>
                    <p class="text-gray-600">Breathtaking views of the Virunga Mountains and Volcanoes National Park</p>
                </div>
                <div class="text-center card-hover bg-yellow-50 p-8 rounded-xl">
                    <div class="text-4xl mb-4">🍯</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Local Cuisine</h3>
                    <p class="text-gray-600">Authentic Rwandan dishes made with fresh local ingredients and traditional recipes</p>
                </div>
                <div class="text-center card-hover bg-blue-50 p-8 rounded-xl">
                    <div class="text-4xl mb-4">🎭</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Cultural Experience</h3>
                    <p class="text-gray-600">Immerse yourself in Rwandan culture with traditional crafts and local experiences</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotels Preview Section -->
    <section id="hotels" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Accommodations</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From luxury suites to traditional huts, experience comfort with Rwandan authenticity
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                        <span class="text-6xl">🏰</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Presidential Suite</h3>
                        <p class="text-gray-600 mb-4">Luxury suite with Virunga Mountain views</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">150,000 RWF</span>
                            <span class="text-sm text-gray-500">per night</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
                        <span class="text-6xl">🏡</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Traditional Hut</h3>
                        <p class="text-gray-600 mb-4">Authentic Rwandan architecture experience</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">65,000 RWF</span>
                            <span class="text-sm text-gray-500">per night</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center">
                        <span class="text-6xl">🌿</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Eco Lodge</h3>
                        <p class="text-gray-600 mb-4">Sustainable accommodation with nature</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">75,000 RWF</span>
                            <span class="text-sm text-gray-500">per night</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="/hotels" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                    View All Accommodations
                </a>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section id="menu" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Traditional Rwandan Cuisine</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Taste authentic flavors from the Land of a Thousand Hills
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center card-hover bg-yellow-50 p-6 rounded-xl">
                    <div class="text-4xl mb-4">🥘</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Ubugali</h3>
                    <p class="text-gray-600 text-sm mb-3">Traditional maize flour staple</p>
                    <span class="text-green-600 font-bold">3,500 RWF</span>
                </div>
                <div class="text-center card-hover bg-red-50 p-6 rounded-xl">
                    <div class="text-4xl mb-4">🥩</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Igikoma</h3>
                    <p class="text-gray-600 text-sm mb-3">Traditional beef stew</p>
                    <span class="text-green-600 font-bold">8,500 RWF</span>
                </div>
                <div class="text-center card-hover bg-blue-50 p-6 rounded-xl">
                    <div class="text-4xl mb-4">🐟</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Lake Kivu Fish</h3>
                    <p class="text-gray-600 text-sm mb-3">Fresh tilapia from Lake Kivu</p>
                    <span class="text-green-600 font-bold">9,500 RWF</span>
                </div>
                <div class="text-center card-hover bg-orange-50 p-6 rounded-xl">
                    <div class="text-4xl mb-4">🍺</div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Urwagwa</h3>
                    <p class="text-gray-600 text-sm mb-3">Traditional banana beer</p>
                    <span class="text-green-600 font-bold">3,000 RWF</span>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="/menu" class="bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300">
                    View Full Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-green-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Visit Us in Musanze</h2>
                <p class="text-xl text-green-100 max-w-3xl mx-auto">
                    Located in the heart of Musanze, gateway to Volcanoes National Park
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="text-2xl mr-4">👤</span>
                            <div>
                                <p class="font-semibold">Juma FILBERTO GEORGE ANDREA</p>
                                <p class="text-green-100">General Manager</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-2xl mr-4">📱</span>
                            <div>
                                <p class="font-semibold">+250 792 086 409</p>
                                <p class="text-green-100">WhatsApp Available</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-2xl mr-4">✉️</span>
                            <div>
                                <p class="font-semibold">filbertogeorge@gmail.com</p>
                                <p class="text-green-100">Email us anytime</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-2xl mr-4">📍</span>
                            <div>
                                <p class="font-semibold">Karismbe, Ganza Plaza</p>
                                <p class="text-green-100">Musanze, Northern Province, Rwanda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Send us a Message</h3>
                    <a href="/contact" class="inline-block bg-white text-green-800 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-50 transition duration-300">
                        Contact Form
                    </a>
                </div>
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

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>

