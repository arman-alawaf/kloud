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

    .minimal-card {
        background: white;
        border: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .minimal-card:hover {
        border-color: #e0e0e0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
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

    .floating-shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>

    <!-- Minimalist Hero Section -->
    <section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="floating-shape w-32 h-32 top-20 left-10"></div>
            <div class="floating-shape w-24 h-24 top-40 right-20"></div>
            <div class="floating-shape w-20 h-20 bottom-20 left-1/4"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-600 text-sm font-medium rounded-full mb-6">
                    Enterprise Solutions
                </span>
                <h1 class="text-5xl md:text-6xl font-light text-gray-900 mb-6 leading-tight">
                    Internet That
                    <span class="gradient-text font-normal">Powers</span>
                    <br>Business Growth
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Dedicated business internet solutions designed for modern enterprises.
                    Reliable connectivity that scales with your business needs.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#solutions" class="px-8 py-4 bg-gray-900 text-white font-medium rounded-full hover:bg-gray-800 transition-all duration-300">
                    Explore Solutions
                </a>
                <a href="#contact" class="px-8 py-4 border border-gray-300 text-gray-700 font-medium rounded-full hover:border-gray-400 transition-all duration-300">
                    Get Quote
                </a>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-light gradient-text mb-2">99.99%</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Uptime SLA</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-light gradient-text mb-2">24/7</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Support</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-light gradient-text mb-2">100Mbps+</div>
                    <div class="text-sm text-gray-600 uppercase tracking-wide">Speeds</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Solutions Section -->
    <section id="solutions" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 mb-6">
                    Tailored <span class="gradient-text font-normal">Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Every business is unique. Our solutions are designed to meet your specific requirements.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Office Connectivity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        High-speed internet for office environments. Multiple devices, video conferencing, cloud applications.
                    </p>
                </div>

                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dedicated Links</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Private, dedicated internet connections for mission-critical business applications and services.
                    </p>
                </div>

                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Cloud Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Seamless cloud connectivity with optimized routing for AWS, Azure, Google Cloud, and more.
                    </p>
                </div>

                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Cybersecurity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Advanced security features including DDoS protection, firewall management, and secure VPN access.
                    </p>
                </div>

                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Backup Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Redundant connectivity with automatic failover. Never lose connection to your critical systems.
                    </p>
                </div>

                <div class="minimal-card p-8 scroll-reveal">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Analytics & Monitoring</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Real-time network monitoring and analytics dashboard for performance optimization and troubleshooting.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enterprise Features Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-reveal">
                    <h2 class="text-4xl md:text-5xl font-light text-gray-900 mb-8">
                        Enterprise-Grade
                        <span class="gradient-text font-normal">Features</span>
                    </h2>

                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-gray-600 font-bold text-sm">01</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Priority Support</h3>
                                <p class="text-gray-600">Dedicated account management with 24/7 priority support and guaranteed response times.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-gray-600 font-bold text-sm">02</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Scalable Bandwidth</h3>
                                <p class="text-gray-600">Flexible bandwidth options that grow with your business. Upgrade or downgrade as needed.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-gray-600 font-bold text-sm">03</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">SLA Guarantees</h3>
                                <p class="text-gray-600">99.99% uptime guarantee with financial credits for service interruptions.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-gray-600 font-bold text-sm">04</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Custom Solutions</h3>
                                <p class="text-gray-600">Tailored solutions designed specifically for your industry and business requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative scroll-reveal">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-6 bg-white rounded-xl">
                                <div class="text-2xl font-light gradient-text mb-2">500+</div>
                                <div class="text-sm text-gray-600">Business Clients</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-xl">
                                <div class="text-2xl font-light gradient-text mb-2">64</div>
                                <div class="text-sm text-gray-600">Cities Covered</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-xl">
                                <div class="text-2xl font-light gradient-text mb-2">24/7</div>
                                <div class="text-sm text-gray-600">Network Monitoring</div>
                            </div>
                            <div class="text-center p-6 bg-white rounded-xl">
                                <div class="text-2xl font-light gradient-text mb-2">5ms</div>
                                <div class="text-sm text-gray-600">Avg Latency</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Benefits Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 mb-6">
                    Why Choose <span class="gradient-text font-normal">Kloud Business</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience the difference that enterprise-grade connectivity makes for your business.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-12">

                    <div class="flex items-start space-x-6 scroll-reveal">
                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Increased Productivity</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Fast, reliable internet means your team can work efficiently without connectivity interruptions.
                                Video calls, cloud applications, and data transfers happen seamlessly.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-6 scroll-reveal">
                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Enhanced Security</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Advanced security features protect your business data and network from cyber threats.
                                Enterprise-grade encryption and monitoring keep your information safe.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="space-y-12">

                    <div class="flex items-start space-x-6 scroll-reveal">
                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Cost Efficiency</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Reduce operational costs with reliable connectivity that minimizes downtime and maximizes efficiency.
                                Pay only for what you need with flexible, scalable plans.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6 scroll-reveal">
                        <div class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center flex-shrink-0">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Future-Ready</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Invest in technology that grows with your business. Our solutions are designed to support
                                emerging technologies like IoT, AI, and cloud computing.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Business Packages Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 mb-6">
                    Business <span class="gradient-text font-normal">Packages</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose the perfect business internet package for your organization.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="minimal-card p-8 text-center scroll-reveal">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Business Starter</h3>
                    <div class="text-4xl font-light gradient-text mb-6">75Mbps</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-8">
                        <li>Dedicated Business Connection</li>
                        <li>99.9% Uptime SLA</li>
                        <li>24/7 Business Support</li>
                        <li>Static IP Address</li>
                        <li>Free Installation</li>
                    </ul>
                    <div class="text-2xl font-semibold text-gray-900 mb-4">BDT 1,499<span class="text-sm font-normal">/month</span></div>
                    <a href="{{url('package')}}" class="inline-block px-6 py-3 bg-gray-900 text-white font-medium rounded-full hover:bg-gray-800 transition-all duration-300">
                        Get Started
                    </a>
                </div>

                <div class="minimal-card p-8 text-center border-2 border-gray-200 scroll-reveal">
                    <div class="inline-block px-3 py-1 bg-gradient-to-r from-blue-500 to-purple-600 text-white text-xs font-medium rounded-full mb-4">
                        Most Popular
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Business Pro</h3>
                    <div class="text-4xl font-light gradient-text mb-6">100Mbps</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-8">
                        <li>Everything in Starter</li>
                        <li>99.99% Uptime SLA</li>
                        <li>Priority Support</li>
                        <li>Advanced Security Suite</li>
                        <li>Cloud Optimization</li>
                    </ul>
                    <div class="text-2xl font-semibold text-gray-900 mb-4">BDT 1,899<span class="text-sm font-normal">/month</span></div>
                    <a href="{{url('package')}}" class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-full hover:shadow-lg transition-all duration-300">
                        Get Started
                    </a>
                </div>

                <div class="minimal-card p-8 text-center scroll-reveal">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Enterprise</h3>
                    <div class="text-4xl font-light gradient-text mb-6">200Mbps+</div>
                    <ul class="space-y-3 text-sm text-gray-600 mb-8">
                        <li>Everything in Pro</li>
                        <li>Custom Bandwidth</li>
                        <li>Dedicated Account Manager</li>
                        <li>Advanced Analytics</li>
                        <li>Custom SLA Terms</li>
                    </ul>
                    <div class="text-2xl font-semibold text-gray-900 mb-4">Custom Pricing</div>
                    <a href="#contact" class="inline-block px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-full hover:border-gray-400 transition-all duration-300">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-light text-gray-900 mb-6">
                Ready to <span class="gradient-text font-normal">Transform</span> Your Business?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Let's discuss how Kloud can provide the connectivity solutions your business needs to thrive in the digital age.
            </p>

            <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                <form class="space-y-6" action="{{url('package/store')}}" method="post">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="name" placeholder="Full Name" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Business Email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300" required>
                        </div>
                        <div>
                            <input type="text" name="company" placeholder="Company Name" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300">
                        </div>
                    </div>

                    <div>
                        <select name="package_id" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300">
                            <option value="">Select Package Interest</option>
                            <option value="business_starter">Business Starter (75Mbps)</option>
                            <option value="business_pro">Business Pro (100Mbps)</option>
                            <option value="enterprise">Enterprise (Custom)</option>
                        </select>
                    </div>

                    <div>
                        <textarea name="message" rows="4" placeholder="Tell us about your business requirements..." class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:border-gray-400 focus:ring-0 outline-none transition-all duration-300 resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-gray-900 text-white font-medium rounded-lg hover:bg-gray-800 transition-all duration-300">
                        Request Business Consultation
                    </button>
                </form>
            </div>
        </div>
    </section>

<script>
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