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

    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .blob {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        animation: blob 7s ease-in-out infinite;
    }

    @keyframes blob {
        0%, 100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        25% { border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%; }
        50% { border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%; }
        75% { border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%; }
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

    /* Swiper Navigation Outside Container */
    .testimonialsSwiper .swiper-button-next,
    .testimonialsSwiper .swiper-button-prev {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        color: #6366f1;
    }

    .testimonialsSwiper .swiper-button-next:hover,
    .testimonialsSwiper .swiper-button-prev:hover {
        background: #6366f1;
        color: white;
        box-shadow: 0 6px 20px rgba(99, 102, 241, 0.3);
    }

    .testimonialsSwiper .swiper-button-next {
        right: -25px;
    }

    .testimonialsSwiper .swiper-button-prev {
        left: -25px;
    }

    .testimonialsSwiper .swiper-button-next::after,
    .testimonialsSwiper .swiper-button-prev::after {
        font-size: 18px;
        font-weight: bold;
    }
</style>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 px-4 sm:px-6 lg:px-8 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="space-y-6 animate-fade-in-left">
                        <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                            <span class="gradient-text">Lightning</span><br>
                            <span class="text-gray-800">Fast Internet</span><br>
                            <span class="text-gray-600">For Bangladesh</span>
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                            Experience Bangladesh's fastest internet with fiber optic connectivity. Ultra-speed broadband, 4K streaming, and gaming without lag. Join thousands of satisfied customers across the nation.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up">
                        <button class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                            Get Connected Now
                        </button>
                        <button class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full font-semibold hover:border-blue-500 hover:text-blue-600 transition-all duration-300 hover-lift">
                            Check Coverage
                        </button>
                    </div>

                    <div class="flex items-center space-x-8 animate-fade-in-up">
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">100Mbps</div>
                            <div class="text-sm text-gray-600">Max Speed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">50K+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">24/7</div>
                            <div class="text-sm text-gray-600">Bangladeshi Support</div>
                        </div>
                    </div>
                </div>

                <div class="relative animate-fade-in-right">
                    <div class="absolute inset-0 blob bg-gradient-to-r from-blue-400 to-purple-500 opacity-20 animate-float"></div>
                    <div class="relative z-10 grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-blue-500 rounded-xl mb-4 flex items-center justify-center">
                                <i class="fas fa-wifi text-white text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">Fiber Optic</h3>
                            <p class="text-sm text-gray-600">Ultra-fast broadband across Bangladesh</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift mt-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-xl mb-4 flex items-center justify-center">
                                <i class="fas fa-gamepad text-white text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">Gaming Ready</h3>
                            <p class="text-sm text-gray-600">Zero lag gaming experience</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl mb-4 flex items-center justify-center">
                                <i class="fas fa-tv text-white text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">4K Streaming</h3>
                            <p class="text-sm text-gray-600">Buffer-free entertainment</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover-lift mt-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-pink-500 rounded-xl mb-4 flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2">24/7 Support</h3>
                            <p class="text-sm text-gray-600">Local Bangladeshi assistance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive cloud solutions tailored to your business needs
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Next Generation Internet Ultra-Fast Connectivity</h3>
                    <p class="text-gray-600 mb-6">Experience seamless internet with our cutting-edge fiber optic network. Built for the future, optimized for today.</p>
                    <!-- <a href="#" class="text-blue-600 font-medium hover:text-blue-700 transition-colors">Learn more →</a> -->
                </div>
                
                <div class="group bg-gradient-to-br from-purple-50 to-pink-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Enterprise Solutions Business-Grade Performance</h3>
                    <p class="text-gray-600 mb-6">Dedicated bandwidth, advanced security, and priority support. Everything your business needs to stay ahead.</p>
                    <!-- <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition-colors">Learn more →</a> -->
                </div>
                
                <div class="group bg-gradient-to-br from-green-50 to-emerald-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Gaming & Streaming Zero-Lag Gaming</h3>
                    <p class="text-gray-600 mb-6">Ultra-low latency for competitive gaming. 4K streaming without buffering. The ultimate entertainment experience.</p>
                    <!-- <a href="#" class="text-green-600 font-medium hover:text-green-700 transition-colors">Learn more →</a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-reveal">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8">
                        Why <span class="gradient-text">Millions</span> Choose Kloud Internet
                    </h2>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-rocket text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Bangladesh's Fastest Internet</h3>
                                <p class="text-gray-600">Experience speeds up to 100Mbps with our cutting-edge fiber optic network. No more buffering, no more waiting.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">99.99% Uptime Guarantee</h3>
                                <p class="text-gray-600">Military-grade infrastructure ensures your connection never fails. Stay connected when it matters most.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">50,000+ Happy Customers</h3>
                                <p class="text-gray-600">Join Bangladesh's largest internet community. From Dhaka to Cox's Bazar, we're everywhere you need us.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-headset text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">24/7 Bangladeshi Support</h3>
                                <p class="text-gray-600">Local experts speaking your language. Get help instantly through phone, chat, or our app - all in Bangla!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative scroll-reveal">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl opacity-10 blob animate-float"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">100Mbps</div>
                                <div class="text-sm text-gray-600">Maximum Speed</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-pink-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">64</div>
                                <div class="text-sm text-gray-600">Districts Covered</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">24/7</div>
                                <div class="text-sm text-gray-600">Customer Care</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-red-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">4K</div>
                                <div class="text-sm text-gray-600">Streaming Ready</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Our Packages</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose the perfect internet package for your needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($packages as $package)
                <div class="bg-white rounded-3xl p-8 shadow-lg border-2 border-gray-100 hover-lift scroll-reveal package-card">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $package->name }}</h3>
                    <div class="text-3xl font-bold gradient-text mb-4">{{ $package->plan }}Mbps</div>
                    <div class="text-lg font-semibold text-gray-700 mb-4">Premium Benefits</div>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600">
                        @foreach(explode(',', $package->feature) as $benefit)
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ trim($benefit) }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="text-center mb-6">
                        <div class="text-4xl font-bold gradient-text">BDT {{ $package->price }}</div>
                        <div class="text-sm text-gray-600">Per Month</div>
                        <div class="text-xs text-gray-500">*excluding vat</div>
                    </div>
                    <button onclick="selectPackage('{{ $package->name }}')" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        Select this Package
                    </button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Join thousands of satisfied customers across Bangladesh who trust Kloud for their internet needs
                </p>
            </div>

            <!-- Swiper Container -->
            <div class="relative swiper testimonialsSwiper scroll-reveal px-16">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">R</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Rahman Ahmed</h4>
                                    <p class="text-gray-600 text-sm">Business Owner, Dhaka</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"Kloud's 50Mbps connection transformed my online business. No more downtime during peak hours. Their customer support speaks Bangla and understands local needs perfectly!"</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Neo Package</p>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-blue-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">S</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Sumaiya Islam</h4>
                                    <p class="text-gray-600 text-sm">Student, Chittagong</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"As a gaming enthusiast, Kloud Gamers package is a dream come true! Zero lag during competitive matches. The 85Mbps speed handles 4K streaming effortlessly."</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Gamers Package</p>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">A</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Ahmed Hossain</h4>
                                    <p class="text-gray-600 text-sm">Freelancer, Sylhet</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"Kloud Stream package is perfect for my work-from-home setup. 45Mbps speed with unlimited data. Their fiber connection is rock solid, even during storms."</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Stream Package</p>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">N</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Nasrin Akter</h4>
                                    <p class="text-gray-600 text-sm">Teacher, Rajshahi</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"My whole family uses Kloud internet for online classes, work, and entertainment. The family package is great value. Support team is always helpful and responds quickly."</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Mini Package</p>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-teal-400 to-cyan-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">K</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Kamal Uddin</h4>
                                    <p class="text-gray-600 text-sm">Cafe Owner, Khulna</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"Running a cyber cafe with Kloud's business package. 75Mbps speed handles 20+ users simultaneously. Best investment for my business. Reliable and fast!"</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Boost+ Package</p>
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-3xl p-8 shadow-lg hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full mr-4 flex items-center justify-center">
                                    <span class="text-white font-bold">F</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Farhana Rahman</h4>
                                    <p class="text-gray-600 text-sm">Doctor, Barisal</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">"Critical for telemedicine consultations. Kloud's 100Mbps connection ensures crystal clear video calls. Their 24/7 support is crucial for healthcare professionals."</p>
                            <div class="flex text-yellow-400 mb-2">
                                ★★★★★
                            </div>
                            <p class="text-xs text-gray-500">Kloud Edge Package</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next text-purple-600 me-8"></div>
                <div class="swiper-button-prev text-purple-600 ms-8"></div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-reveal">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8">
                        Ready to <span class="gradient-text">Get Started</span>?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Join thousands of companies already using Kloud to power their digital transformation.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email Us</h4>
                                <p class="text-gray-600">hello@kloud.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Call Us</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Visit Us</h4>
                                <p class="text-gray-600">Dhaka, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="scroll-reveal">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-8 shadow-lg">
                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <input type="text" placeholder="First Name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                                </div>
                                <div>
                                    <input type="text" placeholder="Last Name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                                </div>
                            </div>
                            
                            <div>
                                <input type="email" placeholder="Email Address" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                            </div>
                            
                            <div>
                                <input type="text" placeholder="Company" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                            </div>

                            <div>
                                <select id="division" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                                    <option value="">Select Division</option>
                                </select>
                            </div>

                            <div>
                                <select id="district" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none" disabled>
                                    <option value="">Select District</option>
                                </select>
                            </div>

                            <div>
                                <select id="thana" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none" disabled>
                                    <option value="">Select Thana</option>
                                </select>
                            </div>

                            <div>
                                <select id="selectedPackage" name="package" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none">
                                    <option value="">Select Package</option>
                                    @foreach($packages as $package)
                                    <option value="{{ $package->id }}">{{ $package->name }} - {{ $package->plan }}Mbps (BDT {{ $package->price }})</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div>
                                <textarea rows="4" placeholder="Tell us about your project" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 outline-none resize-none"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-4 rounded-xl font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.animate-float');

        parallaxElements.forEach(element => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });

    // Form submission handling
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Add form submission logic here
            alert('Thank you for your message! We\'ll get back to you soon.');
        });
    }

    // Initialize Testimonials Swiper after DOM load
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialsSwiper = new Swiper('.testimonialsSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    });

    // Bangladesh Location Data
    const bangladeshData = {
        divisions: [
            'Dhaka', 'Chittagong', 'Rajshahi', 'Khulna', 'Barisal', 'Sylhet', 'Rangpur', 'Mymensingh'
        ],
        districts: {
            'Dhaka': ['Dhaka', 'Gazipur', 'Narayanganj', 'Manikganj', 'Munshiganj', 'Narsingdi', 'Tangail', 'Kishoreganj', 'Faridpur', 'Gopalganj', 'Madaripur', 'Shariatpur', 'Rajbari'],
            'Chittagong': ['Chittagong', 'Cox\'s Bazar', 'Rangamati', 'Bandarban', 'Khagrachhari', 'Feni', 'Lakshmipur', 'Noakhali', 'Brahmanbaria', 'Comilla'],
            'Rajshahi': ['Rajshahi', 'Natore', 'Naogaon', 'Chapainawabganj', 'Pabna', 'Sirajganj', 'Bogra', 'Joypurhat'],
            'Khulna': ['Khulna', 'Jessore', 'Satkhira', 'Meherpur', 'Narail', 'Kushtia', 'Chuadanga', 'Jhenaidah', 'Magura', 'Bagherhat'],
            'Barisal': ['Barisal', 'Bhola', 'Patuakhali', 'Pirojpur', 'Jhalokati', 'Barguna'],
            'Sylhet': ['Sylhet', 'Moulvibazar', 'Habiganj', 'Sunamganj'],
            'Rangpur': ['Rangpur', 'Dinajpur', 'Gaibandha', 'Kurigram', 'Nilphamari', 'Panchagarh', 'Thakurgaon', 'Lalmonirhat'],
            'Mymensingh': ['Mymensingh', 'Jamalpur', 'Sherpur', 'Netrokona']
        },
        thanas: {
            // Dhaka Division
            'Dhaka': ['Dhanmondi', 'Gulshan', 'Banani', 'Uttara', 'Mirpur', 'Mohammadpur', 'Tejgaon', 'Ramna', 'Motijheel', 'Sabujbagh', 'Khilgaon', 'Paltan', 'Wari', 'Kotwali', 'Sutrapur', 'Hazaribagh', 'Demra', 'Kadamtali', 'Gandaria', 'Kamrangirchar', 'Jatrabari', 'Shyampur', 'Siddheshwari', 'Cantonment', 'Keraniganj', 'Dohar', 'Nawabganj', 'Savar'],
            'Gazipur': ['Gazipur Sadar', 'Kaliakair', 'Kapasia', 'Sreepur', 'Kaliganj'],
            'Narayanganj': ['Narayanganj Sadar', 'Araihazar', 'Sonargaon', 'Bandar', 'Rupganj'],
            'Manikganj': ['Manikganj Sadar', 'Singair', 'Shibalaya', 'Saturia', 'Harirampur', 'Ghior', 'Daulatpur'],
            'Munshiganj': ['Munshiganj Sadar', 'Sreenagar', 'Sirajdikhan', 'Louhajong', 'Gajaria', 'Tongibari'],
            'Narsingdi': ['Narsingdi Sadar', 'Belabo', 'Monohardi', 'Palash', 'Raipura', 'Shibpur'],
            'Tangail': ['Tangail Sadar', 'Sakhipur', 'Basail', 'Madhupur', 'Ghatail', 'Kalihati', 'Nagarpur', 'Mirzapur', 'Gopalpur', 'Delduar', 'Bhuapur', 'Dhanbari'],
            'Kishoreganj': ['Kishoreganj Sadar', 'Bajitpur', 'Austagram', 'Karimganj', 'Katiadi', 'Tarail', 'Pakundia', 'Kuliarchar', 'Hossainpur', 'Itna', 'Mithamain', 'Nikli', 'Bhairab'],
            'Faridpur': ['Faridpur Sadar', 'Alfadanga', 'Boalmari', 'Sadarpur', 'Nagarkanda', 'Bhanga', 'Charbhadrasan', 'Madhukhali', 'Saltha'],
            'Gopalganj': ['Gopalganj Sadar', 'Kashiani', 'Tungipara', 'Kotalipara', 'Muksudpur'],
            'Madaripur': ['Madaripur Sadar', 'Shibchar', 'Kalkini', 'Rajoir', 'Dasar'],
            'Shariatpur': ['Shariatpur Sadar', 'Damudya', 'Naria', 'Zanjira', 'Bhedarganj', 'Gosairhat'],
            'Rajbari': ['Rajbari Sadar', 'Goalanda', 'Pangsha', 'Baliakandi', 'Kalukhali'],

            // Chittagong Division
            'Chittagong': ['Chittagong Sadar', 'Hathazari', 'Raozan', 'Patiya', 'Karnaphuli', 'Anwara', 'Chandanaish', 'Satkania', 'Lohagara', 'Boalkhali', 'Rangunia', 'Mirsharai', 'Sitakunda', 'Sandwip', 'Banshkhali', 'Fatikchhari'],
            'Cox\'s Bazar': ['Cox\'s Bazar Sadar', 'Chakaria', 'Ramu', 'Ukhia', 'Teknaf', 'Moheshkhali', 'Pekua', 'Kutubdia'],
            'Rangamati': ['Rangamati Sadar', 'Kaptai', 'Kawkhali', 'Baghaichhari', 'Barkal', 'Langadu', 'Rajasthali', 'Belaichhari'],
            'Bandarban': ['Bandarban Sadar', 'Thanchi', 'Lama', 'Naikhongchhari', 'Ali Kadam', 'Rowangchhari', 'Ruma'],
            'Khagrachhari': ['Khagrachhari Sadar', 'Dighinala', 'Panchhari', 'Laxmichhari', 'Mohalchhari', 'Manikchhari', 'Ramgarh', 'Guimara'],
            'Feni': ['Feni Sadar', 'Chhagalnaiya', 'Daganbhuiyan', 'Parshuram', 'Sonagazi', 'Fulgazi'],
            'Lakshmipur': ['Lakshmipur Sadar', 'Kamalnagar', 'Raipur', 'Ramgati', 'Ramganj'],
            'Noakhali': ['Noakhali Sadar', 'Chatkhil', 'Begumganj', 'Hatiya', 'Kobirhat', 'Senbagh', 'Sonaimuri', 'Subarnachar', 'Kabirhat'],
            'Brahmanbaria': ['Brahmanbaria Sadar', 'Ashuganj', 'Nasirnagar', 'Nabinagar', 'Sarail', 'Shahbazpur', 'Kasba', 'Akhaura', 'Bancharampur', 'Bijoynagar'],
            'Comilla': ['Comilla Sadar', 'Daudkandi', 'Homna', 'Muradnagar', 'Meghna', 'Titas', 'Burichang', 'Brahmanpara', 'Chandina', 'Chauddagram', 'Debidwar', 'Barura', 'Laksam', 'Nangalkot', 'Monohorgonj', 'Sadar South'],

            // Rajshahi Division
            'Rajshahi': ['Rajshahi Sadar', 'Bagha', 'Bagmara', 'Charghat', 'Durgapur', 'Godagari', 'Mohanpur', 'Paba', 'Puthia', 'Tanore'],
            'Natore': ['Natore Sadar', 'Singra', 'Baraigram', 'Bagatipara', 'Lalpur', 'Gurudaspur', 'Naldanga'],
            'Naogaon': ['Naogaon Sadar', 'Mohadevpur', 'Manda', 'Niamatpur', 'Atrai', 'Raninagar', 'Patnitala', 'Dhamoirhat', 'Sapahar', 'Porsha', 'Badalgachhi'],
            'Chapainawabganj': ['Chapainawabganj Sadar', 'Gomastapur', 'Nachole', 'Bholahat', 'Shibganj'],
            'Pabna': ['Pabna Sadar', 'Sujanagar', 'Ishwardi', 'Bhangura', 'Atgharia', 'Chatmohar', 'Santhia', 'Faridpur', 'Kahaloo'],
            'Sirajganj': ['Sirajganj Sadar', 'Belkuchi', 'Chauhali', 'Kamarkhanda', 'Kazipur', 'Raiganj', 'Shahjadpur', 'Tarash', 'Ullahpara'],
            'Bogra': ['Bogra Sadar', 'Shibganj', 'Sariakandi', 'Sonatala', 'Dhupchanchia', 'Gabtali', 'Sukhanpukur', 'Kahaloo', 'Nandigram', 'Adam dighi', 'Dhunat'],
            'Joypurhat': ['Joypurhat Sadar', 'Akkelpur', 'Kalai', 'Khetlal', 'Panchbibi'],

            // Khulna Division
            'Khulna': ['Khulna Sadar', 'Sonadanga', 'Khalishpur', 'Daulatpur', 'Rupsa', 'Terokhada', 'Dumuria', 'Batiaghata', 'Dacope', 'Paikgachha', 'Fultala', 'Rupsa'],
            'Jessore': ['Jessore Sadar', 'Abhaynagar', 'Bagherpara', 'Chaugachha', 'Jhikargachha', 'Keshabpur', 'Manirampur', 'Sharsha'],
            'Satkhira': ['Satkhira Sadar', 'Assasuni', 'Debhata', 'Kalaroa', 'Kaliganj', 'Shyamnagar', 'Tala'],
            'Meherpur': ['Meherpur Sadar', 'Gangni', 'Mujibnagar'],
            'Narail': ['Narail Sadar', 'Lohagara', 'Kalia'],
            'Kushtia': ['Kushtia Sadar', 'Kumarkhali', 'Khoksa', 'Mirpur', 'Daulatpur', 'Bheramara'],
            'Chuadanga': ['Chuadanga Sadar', 'Alamdanga', 'Damurhuda', 'Jibannagar'],
            'Jhenaidah': ['Jhenaidah Sadar', 'Maheshpur', 'Kaliganj', 'Kotchandpur', 'Shailkupa', 'Harinakundu'],
            'Magura': ['Magura Sadar', 'Mohammadpur', 'Shalikha', 'Sreepur'],
            'Bagherhat': ['Bagherhat Sadar', 'Kachua', 'Mollahat', 'Sarankhola', 'Rampal', 'Morrelganj', 'Mongla', 'Chitalmari'],

            // Barisal Division
            'Barisal': ['Barisal Sadar', 'Bakerganj', 'Babuganj', 'Wazirpur', 'Banaripara', 'Gournadi', 'Agailjhara', 'Mehendiganj', 'Muladi', 'Hizla'],
            'Bhola': ['Bhola Sadar', 'Borhanuddin', 'Char Fasson', 'Daulatkhan', 'Lalmohan', 'Manpura', 'Tazumuddin'],
            'Patuakhali': ['Patuakhali Sadar', 'Bauphal', 'Dashmina', 'Galachipa', 'Kalapara', 'Mirzaganj', 'Dumki', 'Rangabali'],
            'Pirojpur': ['Pirojpur Sadar', 'Nazirpur', 'Kawkhali', 'Zianagar', 'Bhandaria', 'Mathbaria', 'Nesarabad'],
            'Jhalokati': ['Jhalokati Sadar', 'Kathalia', 'Nalchity', 'Rajapur'],
            'Barguna': ['Barguna Sadar', 'Amtali', 'Bamna', 'Betagi', 'Patharghata', 'Taltali'],

            // Sylhet Division
            'Sylhet': ['Sylhet Sadar', 'Beanibazar', 'Bishwanath', 'Dakshin Surma', 'Balaganj', 'Companiganj', 'Fenchuganj', 'Golapganj', 'Gowainghat', 'Jaintiapur', 'Kanaighat', 'Zakiganj', 'Nobigonj'],
            'Moulvibazar': ['Moulvibazar Sadar', 'Barlekha', 'Juri', 'Kamalganj', 'Kulaura', 'Rajnagar', 'Sreemangal'],
            'Habiganj': ['Habiganj Sadar', 'Ajmiriganj', 'Baniachang', 'Bahubal', 'Chunarughat', 'Habiganj Sadar', 'Lakhai', 'Madhabpur', 'Nabiganj'],
            'Sunamganj': ['Sunamganj Sadar', 'South Sunamganj', 'Bishwamvarpur', 'Chhatak', 'Jagannathpur', 'Dowarabazar', 'Tahirpur', 'Dharmapasha', 'Jamalganj', 'Shalla', 'Derai', 'Madhyanagar'],

            // Rangpur Division
            'Rangpur': ['Rangpur Sadar', 'Gangachhara', 'Taraganj', 'Badarganj', 'Mithapukur', 'Pirgachha', 'Kaunia', 'Rangpur Sadar', 'Pirganj'],
            'Dinajpur': ['Dinajpur Sadar', 'Birganj', 'Birampur', 'Parbatipur', 'Bochaganj', 'Kaharole', 'Fulbari', 'Ghoraghat', 'Hakimpur', 'Kaharole', 'Nawabganj', 'Parbatipur'],
            'Gaibandha': ['Gaibandha Sadar', 'Gobindaganj', 'Palashbari', 'Sadullapur', 'Sughatta', 'Sundarganj', 'Phulchhari'],
            'Kurigram': ['Kurigram Sadar', 'Nageshwari', 'Bhurungamari', 'Phulbari', 'Rajarhat', 'Ulipur', 'Chilmari', 'Rowmari', 'Char Rajibpur'],
            'Nilphamari': ['Nilphamari Sadar', 'Saidpur', 'Jaldhaka', 'Kishoreganj', 'Domar', 'Dimla'],
            'Panchagarh': ['Panchagarh Sadar', 'Debiganj', 'Boda', 'Atwari', 'Tetulia'],
            'Thakurgaon': ['Thakurgaon Sadar', 'Pirganj', 'Baliadangi', 'Haripur', 'Ranisankail'],
            'Lalmonirhat': ['Lalmonirhat Sadar', 'Aditmari', 'Kaliganj', 'Hatibandha', 'Patgram', 'Tushbhandar'],

            // Mymensingh Division
            'Mymensingh': ['Mymensingh Sadar', 'Bhaluka', 'Trishal', 'Haluaghat', 'Muktagachha', 'Dhobaura', 'Fulbaria', 'Gaffargaon', 'Gauripur', 'Ishwarganj', 'Nandail', 'Phulpur', 'Tarakanda'],
            'Jamalpur': ['Jamalpur Sadar', 'Melandaha', 'Islampur', 'Dewanganj', 'Sarishabari', 'Madarganj', 'Bokshiganj'],
            'Sherpur': ['Sherpur Sadar', 'Nalitabari', 'Sreebardi', 'Jhenaigati'],
            'Netrokona': ['Netrokona Sadar', 'Atpara', 'Barhatta', 'Durgapur', 'Khaliajuri', 'Kalmakanda', 'Kendua', 'Madan', 'Mohanganj', 'Purbadhala']
        }
    };

    // Populate Divisions
    const divisionSelect = document.getElementById('division');
    const districtSelect = document.getElementById('district');
    const thanaSelect = document.getElementById('thana');

    bangladeshData.divisions.forEach(division => {
        const option = document.createElement('option');
        option.value = division;
        option.textContent = division;
        divisionSelect.appendChild(option);
    });

    // Handle Division Change
    divisionSelect.addEventListener('change', function() {
        const selectedDivision = this.value;

        // Reset district and thana
        districtSelect.innerHTML = '<option value="">Select District</option>';
        thanaSelect.innerHTML = '<option value="">Select Thana</option>';
        districtSelect.disabled = true;
        thanaSelect.disabled = true;

        if (selectedDivision && bangladeshData.districts[selectedDivision]) {
            districtSelect.disabled = false;
            bangladeshData.districts[selectedDivision].forEach(district => {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
        }
    });

    // Handle District Change
    districtSelect.addEventListener('change', function() {
        const selectedDistrict = this.value;

        // Reset thana
        thanaSelect.innerHTML = '<option value="">Select Thana</option>';
        thanaSelect.disabled = true;

        if (selectedDistrict && bangladeshData.thanas[selectedDistrict]) {
            thanaSelect.disabled = false;
            bangladeshData.thanas[selectedDistrict].forEach(thana => {
                const option = document.createElement('option');
                option.value = thana;
                option.textContent = thana;
                thanaSelect.appendChild(option);
            });
        }
    });

    // Package Selection Function
    function selectPackage(packageName) {
        // Scroll to contact form
        const contactSection = document.getElementById('contact');
        if (contactSection) {
            contactSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Find and select the package in the dropdown
        const packageSelect = document.getElementById('selectedPackage');
        if (packageSelect) {
            const options = packageSelect.options;
            for (let i = 0; i < options.length; i++) {
                if (options[i].textContent.includes(packageName)) {
                    packageSelect.selectedIndex = i;
                    break;
                }
            }
        }
    }

    // Check for selected package from package page
    document.addEventListener('DOMContentLoaded', function() {
        const selectedPackage = sessionStorage.getItem('selectedPackage');
        if (selectedPackage) {
            // Scroll to contact section
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                setTimeout(() => {
                    contactSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 500); // Small delay to ensure page is fully loaded
            }

            // Select the package in dropdown
            const packageSelect = document.getElementById('selectedPackage');
            if (packageSelect) {
                const options = packageSelect.options;
                for (let i = 0; i < options.length; i++) {
                    if (options[i].textContent.includes(selectedPackage)) {
                        packageSelect.selectedIndex = i;
                        break;
                    }
                }
            }

            // Clear the stored package
            sessionStorage.removeItem('selectedPackage');
        }
    });
</script>
@endsection