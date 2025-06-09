<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - INGAGI ERP</title>
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
                    <a href="/menu" class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium">Restaurant</a>
                    <a href="/contact" class="text-green-600 px-3 py-2 rounded-md text-sm font-medium font-semibold">Contact</a>
                    <a href="{{ route('login') }}" class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700">Staff Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-700 rwandan-pattern pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    📞 Contact Us
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Get in touch with us for reservations, inquiries, or to experience Rwandan hospitality
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Get in Touch</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start card-hover bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">👤</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">General Manager</h3>
                                <p class="text-lg text-green-600 font-semibold">Juma FILBERTO GEORGE ANDREA</p>
                                <p class="text-gray-600">Available for all inquiries and special arrangements</p>
                            </div>
                        </div>

                        <div class="flex items-start card-hover bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">📱</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Phone & WhatsApp</h3>
                                <p class="text-lg text-green-600 font-semibold">+250 792 086 409</p>
                                <p class="text-gray-600">Available 24/7 for reservations and emergencies</p>
                                <a href="tel:+250792086409" class="inline-block mt-2 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                                    Call Now
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start card-hover bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">✉️</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Email</h3>
                                <p class="text-lg text-green-600 font-semibold">filbertogeorge@gmail.com</p>
                                <p class="text-gray-600">Send us your inquiries and we'll respond within 24 hours</p>
                                <a href="mailto:filbertogeorge@gmail.com" class="inline-block mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Send Email
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start card-hover bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">📍</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Location</h3>
                                <p class="text-lg text-green-600 font-semibold">Karismbe, Ganza Plaza</p>
                                <p class="text-gray-600">Musanze, Northern Province, Rwanda</p>
                                <p class="text-sm text-gray-500 mt-1">Gateway to Volcanoes National Park</p>
                            </div>
                        </div>

                        <div class="flex items-start card-hover bg-white p-6 rounded-xl shadow-lg">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">🕒</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Operating Hours</h3>
                                <div class="text-gray-600">
                                    <p><span class="font-semibold">Reception:</span> 24/7</p>
                                    <p><span class="font-semibold">Restaurant:</span> 6:00 AM - 11:00 PM</p>
                                    <p><span class="font-semibold">Check-in:</span> 2:00 PM</p>
                                    <p><span class="font-semibold">Check-out:</span> 11:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Send us a Message</h2>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <div class="flex">
                                <div class="py-1">
                                    <span class="text-2xl mr-2">✅</span>
                                </div>
                                <div>
                                    <p class="font-bold">Message Sent Successfully!</p>
                                    <p class="text-sm">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    <form action="/contact" method="POST" class="bg-white p-8 rounded-xl shadow-lg">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                       placeholder="+250 XXX XXX XXX">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <select id="subject" name="subject" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Select a subject</option>
                                <option value="room_reservation">Room Reservation</option>
                                <option value="restaurant_reservation">Restaurant Reservation</option>
                                <option value="event_planning">Event Planning</option>
                                <option value="general_inquiry">General Inquiry</option>
                                <option value="complaint">Complaint</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="check_in" class="block text-sm font-medium text-gray-700 mb-2">Preferred Check-in Date</label>
                            <input type="date" id="check_in" name="check_in" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>

                        <div class="mb-6">
                            <label for="guests" class="block text-sm font-medium text-gray-700 mb-2">Number of Guests</label>
                            <select id="guests" name="guests" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Select number of guests</option>
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6+">6+ Guests</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                      placeholder="Tell us about your inquiry, special requests, or how we can help you..."></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="newsletter" value="1" 
                                       class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">
                                    I would like to receive updates about special offers and events
                                </span>
                            </label>
                        </div>

                        <button type="submit" 
                                class="w-full bg-green-600 text-white py-4 px-6 rounded-lg text-lg font-semibold hover:bg-green-700 transition duration-300 flex items-center justify-center">
                            <span class="mr-2">📧</span>
                            Send Message
                        </button>

                        <p class="text-sm text-gray-500 mt-4 text-center">
                            We'll respond to your message within 24 hours. For urgent matters, please call us directly.
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Find Us in Musanze</h2>
                <p class="text-xl text-gray-600">
                    Located in the heart of Musanze, your gateway to Volcanoes National Park
                </p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">🗺️ Location Details</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <span class="text-2xl mr-4">🏢</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Building</p>
                                    <p class="text-gray-600">Ganza Plaza</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl mr-4">🏘️</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Sector</p>
                                    <p class="text-gray-600">Karismbe</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl mr-4">🏙️</span>
                                <div>
                                    <p class="font-semibold text-gray-900">City</p>
                                    <p class="text-gray-600">Musanze</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl mr-4">🇷🇼</span>
                                <div>
                                    <p class="font-semibold text-gray-900">Province</p>
                                    <p class="text-gray-600">Northern Province, Rwanda</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">🚗 Getting Here</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li>• 15 minutes from Volcanoes National Park</li>
                                <li>• 2 hours drive from Kigali International Airport</li>
                                <li>• Walking distance from Musanze town center</li>
                                <li>• Public transport available from Kigali</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-400 to-blue-500 rounded-lg p-8 text-white text-center">
                        <span class="text-8xl block mb-4">🗺️</span>
                        <h3 class="text-2xl font-bold mb-4">Interactive Map</h3>
                        <p class="mb-6">
                            For detailed directions and real-time navigation, please use your preferred map application
                        </p>
                        <div class="space-y-3">
                            <a href="https://maps.google.com/?q=Musanze,Rwanda" target="_blank" 
                               class="block bg-white text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-green-50 transition duration-300">
                                Open in Google Maps
                            </a>
                            <p class="text-sm text-green-100">
                                Search for "Ganza Plaza, Musanze" for exact location
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact -->
    <section class="bg-red-600 text-white py-12">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-4">🚨 Emergency Contact</h2>
            <p class="text-xl text-red-100 mb-6">
                For urgent matters or emergencies, contact us immediately
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+250792086409" class="bg-white text-red-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-red-50 transition duration-300">
                    📞 Emergency: +250 792 086 409
                </a>
                <a href="https://wa.me/250792086409" target="_blank" class="bg-green-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-600 transition duration-300">
                    💬 WhatsApp
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

