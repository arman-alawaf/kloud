@extends('layouts.newFront')

@section('content')
<style>
    .glass-morphism {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .offer-card {
        background: white;
        border: 2px solid #f0f0f0;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .offer-card:hover {
        border-color: #e0e0e0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .offer-card.featured {
        border-color: #6366f1;
        box-shadow: 0 10px 30px rgba(99, 102, 241, 0.2);
    }

    .offer-card.featured::before {
        content: 'MOST POPULAR';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        padding: 8px;
        font-size: 12px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .pulse-ring {
        animation: pulseRing 2s infinite;
    }

    @keyframes pulseRing {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.1);
            opacity: 0;
        }
    }

    .countdown {
        font-family: 'Courier New', monospace;
        font-weight: bold;
    }

    .scroll-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    .floating-offer {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        animation: floatOffer 6s ease-in-out infinite;
    }

    @keyframes floatOffer {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        25% { transform: translateY(-15px) rotate(90deg); }
        50% { transform: translateY(-30px) rotate(180deg); }
        75% { transform: translateY(-15px) rotate(270deg); }
    }
</style>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-gradient-to-br from-orange-50 via-red-50 to-pink-50">
        <div class="absolute inset-0">
            <div class="floating-offer w-20 h-20 top-20 left-10 bg-gradient-to-br from-orange-400 to-red-400"></div>
            <div class="floating-offer w-16 h-16 top-40 right-20 bg-gradient-to-br from-red-400 to-pink-400"></div>
            <div class="floating-offer w-24 h-24 bottom-20 left-1/4 bg-gradient-to-br from-pink-400 to-purple-400"></div>
            <div class="floating-offer w-18 h-18 top-60 right-1/3 bg-gradient-to-br from-purple-400 to-orange-400"></div>
        </div>

        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="mb-8">
                <div class="inline-flex items-center px-4 py-2 bg-orange-100 text-orange-800 text-sm font-medium rounded-full mb-6">
                    <span class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></span>
                    Limited Time Offers
                </div>

                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    <span class="gradient-text">Exclusive</span><br>
                    <span class="text-gray-800">Offers</span><br>
                    <span class="text-gray-600 text-4xl md:text-5xl font-light">Just for You</span>
                </h1>

                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 leading-relaxed">
                    Don't miss out on our special promotions! Get premium internet services at unbeatable prices.
                    These exclusive deals won't last long.
                </p>

                <!-- Countdown Timer -->
                <div class="bg-white rounded-2xl p-6 shadow-lg inline-block mb-8">
                    <div class="text-sm text-gray-600 mb-2">Offer ends in:</div>
                    <div class="flex space-x-4 text-center">
                        <div>
                            <div class="countdown text-2xl font-bold gradient-text" id="days">07</div>
                            <div class="text-xs text-gray-500 uppercase">Days</div>
                        </div>
                        <div class="text-gray-300 text-2xl">:</div>
                        <div>
                            <div class="countdown text-2xl font-bold gradient-text" id="hours">14</div>
                            <div class="text-xs text-gray-500 uppercase">Hours</div>
                        </div>
                        <div class="text-gray-300 text-2xl">:</div>
                        <div>
                            <div class="countdown text-2xl font-bold gradient-text" id="minutes">32</div>
                            <div class="text-xs text-gray-500 uppercase">Minutes</div>
                        </div>
                        <div class="text-gray-300 text-2xl">:</div>
                        <div>
                            <div class="countdown text-2xl font-bold gradient-text" id="seconds">45</div>
                            <div class="text-xs text-gray-500 uppercase">Seconds</div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#offers" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                        View All Offers
                    </a>
                    <a href="#contact" class="px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-full hover:border-orange-500 hover:text-orange-600 transition-all duration-300">
                        Get Free Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section id="offers" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Special Offers</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Take advantage of these exclusive deals before they're gone
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Offer 1 -->
                <div class="offer-card p-8 scroll-reveal">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <div class="bg-red-100 text-red-800 text-xs font-bold px-3 py-1 rounded-full">
                            SAVE 25%
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">New Customer Special</h3>
                    <p class="text-gray-600 mb-6">Get your first 3 months at 25% off on any residential package. Perfect for new homeowners!</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Free Installation
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Free Router
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 Support
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-green-500 to-teal-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Claim Offer
                    </button>
                </div>

                <!-- Offer 2 -->
                <div class="offer-card p-8 featured scroll-reveal">
                    <div class="flex items-center justify-between mb-6 pt-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                            LIMITED TIME
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Business Bundle Deal</h3>
                    <p class="text-gray-600 mb-6">Complete business internet solution with phone system and cloud backup. Save 40% on the bundle!</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            100Mbps Internet
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Business Phone System
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Cloud Backup (100GB)
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <div class="text-3xl font-bold gradient-text">BDT 3,999</div>
                        <div class="text-sm text-gray-500">per month (was BDT 6,665)</div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Get Bundle Deal
                    </button>
                </div>

                <!-- Offer 3 -->
                <div class="offer-card p-8 scroll-reveal">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                        </div>
                        <div class="bg-orange-100 text-orange-800 text-xs font-bold px-3 py-1 rounded-full">
                            FAMILY DEAL
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Family Plan Special</h3>
                    <p class="text-gray-600 mb-6">Perfect for families! Get unlimited data and 4K streaming for the whole household.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Unlimited Data
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            4K Streaming Ready
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            5 Connected Devices
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Family Deal
                    </button>
                </div>

                <!-- Offer 4 -->
                <div class="offer-card p-8 scroll-reveal">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div class="bg-purple-100 text-purple-800 text-xs font-bold px-3 py-1 rounded-full">
                            STUDENT DEAL
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Student Special</h3>
                    <p class="text-gray-600 mb-6">Special pricing for students with valid ID. Perfect for online learning and gaming.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Student Discount (30%)
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Gaming Optimized
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Valid Student ID Required
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-purple-500 to-pink-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Student Offer
                    </button>
                </div>

                <!-- Offer 5 -->
                <div class="offer-card p-8 scroll-reveal">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z"></path>
                            </svg>
                        </div>
                        <div class="bg-teal-100 text-teal-800 text-xs font-bold px-3 py-1 rounded-full">
                            FREE SETUP
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Free Installation Month</h3>
                    <p class="text-gray-600 mb-6">Get your first month free when you sign up today! No installation charges, no hidden fees.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            First Month Free
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Free Professional Installation
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            No Contract Required
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-teal-500 to-cyan-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Free Month Offer
                    </button>
                </div>

                <!-- Offer 6 -->
                <div class="offer-card p-8 scroll-reveal">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="bg-indigo-100 text-indigo-800 text-xs font-bold px-3 py-1 rounded-full">
                            UPGRADE DEAL
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Upgrade Bonus</h3>
                    <p class="text-gray-600 mb-6">Upgrade your existing plan and get 50% off your first month on the new package!</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            50% Off First Month
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Keep Your Equipment
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Instant Speed Upgrade
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-indigo-500 to-blue-600 text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        Upgrade Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Why Choose Our Offers?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Compare and see why our special offers provide the best value
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-2xl shadow-lg overflow-hidden">
                    <thead class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Features</th>
                            <th class="px-6 py-4 text-center font-semibold">Regular Price</th>
                            <th class="px-6 py-4 text-center font-semibold">Offer Price</th>
                            <th class="px-6 py-4 text-center font-semibold">Savings</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">New Customer Special (35Mbps)</td>
                            <td class="px-6 py-4 text-center">BDT 699</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">BDT 524</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">25% OFF</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Business Bundle Deal</td>
                            <td class="px-6 py-4 text-center">BDT 6,665</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">BDT 3,999</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">40% OFF</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Family Plan (45Mbps)</td>
                            <td class="px-6 py-4 text-center">BDT 899</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">BDT 674</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">25% OFF</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">Student Special (35Mbps)</td>
                            <td class="px-6 py-4 text-center">BDT 699</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">BDT 489</td>
                            <td class="px-6 py-4 text-center text-green-600 font-semibold">30% OFF</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Ready to <span class="gradient-text">Claim</span> Your Offer?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Don't wait! These exclusive offers are time-limited. Contact us today to secure your special pricing.
            </p>

            <div class="bg-gray-50 rounded-2xl p-8 max-w-2xl mx-auto">
                <form class="space-y-6" action="{{url('package/store')}}" method="post">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="name" placeholder="Full Name" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email Address" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                        <div>
                            <select name="offer_type" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 outline-none transition-all duration-300">
                                <option value="">Select Your Offer</option>
                                <option value="new_customer">New Customer Special</option>
                                <option value="business_bundle">Business Bundle Deal</option>
                                <option value="family_plan">Family Plan Special</option>
                                <option value="student_special">Student Special</option>
                                <option value="free_month">Free Installation Month</option>
                                <option value="upgrade_bonus">Upgrade Bonus</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <textarea name="message" rows="4" placeholder="Tell us about your requirements or questions about the offers..." class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-0 outline-none transition-all duration-300 resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        Claim Your Offer Now
                    </button>
                </form>
            </div>

            <div class="mt-8 text-sm text-gray-500">
                <p>* Offers are subject to availability and may change without notice.</p>
                <p>* Valid for new connections only. Cannot be combined with other offers.</p>
            </div>
        </div>
    </section>

<script>
    // Countdown Timer
    function updateCountdown() {
        const now = new Date().getTime();
        const endDate = new Date('2025-09-30T23:59:59').getTime(); // Set your end date
        const timeLeft = endDate - now;

        if (timeLeft > 0) {
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }
    }

    // Update countdown every second
    setInterval(updateCountdown, 1000);
    updateCountdown(); // Initial call

    // Scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
</script>

@endsection