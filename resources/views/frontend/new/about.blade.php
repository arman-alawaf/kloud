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

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
    }
</style>

    <!-- Hero Section -->
    <section id="about-hero" class="pt-24 pb-16 px-4 sm:px-6 lg:px-8 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="space-y-6 animate-fade-in-left">
                        <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                            <span class="gradient-text">About</span><br>
                            <span class="text-gray-800">Kloud</span><br>
                            <span class="text-gray-600">Technologies</span>
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                            Empowering Bangladesh with blazing-fast internet and next-generation digital solutions since 2019. We're not just an ISP – we're your gateway to the digital future.
                        </p>
                    </div>

                    <div class="flex items-center space-x-8 animate-fade-in-up">
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">2019</div>
                            <div class="text-sm text-gray-600">Founded</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">50K+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold gradient-text">64</div>
                            <div class="text-sm text-gray-600">Districts Covered</div>
                        </div>
                    </div>
                </div>

                <div class="relative animate-fade-in-right">
                    <div class="absolute inset-0 blob bg-gradient-to-r from-blue-400 to-purple-500 opacity-20 animate-float"></div>
                    <div class="relative z-10">
                        <img
                            src="{{asset('new/aboutSo.webp')}}"
                            alt="Kloud Technologies"
                            class="w-full max-w-lg mx-auto rounded-3xl shadow-2xl hover-lift"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="scroll-reveal">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8">
                        Our <span class="gradient-text">Story</span>
                    </h2>

                    <div class="space-y-6 text-lg text-gray-600">
                        <p>
                            Launched in 2019, <span class="font-semibold text-indigo-600">Kloud Technologies Limited</span>
                            burst onto the scene with a mission to supercharge connectivity across Bangladesh.
                            As a top-tier <span class="font-semibold">Internet Service Provider (ISP)</span> and
                            <span class="font-semibold">National Internet Exchange (NIX)</span>, we deliver
                            reliable and secure internet solutions to homes, businesses, and enterprises nationwide.
                        </p>

                        <p>
                            Our cutting-edge infrastructure spans both urban and remote regions, ensuring
                            seamless connectivity and access to advanced broadband and cloud services.
                            At Kloud, we don't just connect networks – we ignite digital progress and support
                            the vision of <span class="font-semibold text-indigo-600">Digital Bangladesh</span>.
                        </p>
                    </div>
                </div>

                <div class="relative scroll-reveal">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl opacity-10 blob animate-float"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">100Mbps</div>
                                <div class="text-sm text-gray-600">Max Speed</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-pink-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">24/7</div>
                                <div class="text-sm text-gray-600">Support</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">99.99%</div>
                                <div class="text-sm text-gray-600">Uptime</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-red-100 rounded-2xl">
                                <div class="text-3xl font-bold gradient-text mb-2">5+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Our Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive digital solutions designed to meet your connectivity and technology needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">High-Speed Broadband</h3>
                    <p class="text-gray-600 mb-6">Lightning-fast fiber optic internet connectivity for homes and businesses across Bangladesh.</p>
                </div>

                <div class="group bg-gradient-to-br from-purple-50 to-pink-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Cloud Services</h3>
                    <p class="text-gray-600 mb-6">Secure and scalable cloud solutions to power your business operations and data management.</p>
                </div>

                <div class="group bg-gradient-to-br from-green-50 to-emerald-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">AI-Powered Automation</h3>
                    <p class="text-gray-600 mb-6">Intelligent automation solutions to streamline your workflows and boost productivity.</p>
                </div>

                <div class="group bg-gradient-to-br from-orange-50 to-red-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Dedicated Data Links</h3>
                    <p class="text-gray-600 mb-6">High-performance dedicated connections for mission-critical business applications.</p>
                </div>

                <div class="group bg-gradient-to-br from-teal-50 to-cyan-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">IT Infrastructure</h3>
                    <p class="text-gray-600 mb-6">Complete IT infrastructure management and support services for modern businesses.</p>
                </div>

                <div class="group bg-gradient-to-br from-indigo-50 to-purple-100 rounded-3xl p-8 hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Network Solutions</h3>
                    <p class="text-gray-600 mb-6">Advanced networking solutions including NIX services and enterprise connectivity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16">
                <div class="scroll-reveal">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Our Mission</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            To supercharge connectivity across Bangladesh by delivering blazing-fast, reliable, and secure internet solutions that empower homes, businesses, and enterprises nationwide. We bridge the digital divide and create opportunities for growth and innovation.
                        </p>
                    </div>
                </div>

                <div class="scroll-reveal">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-100 rounded-3xl p-8 hover-lift">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mb-6 flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Our Vision</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            To be Bangladesh's premier digital infrastructure provider, leading the charge in creating a connected, future-ready nation. We envision a Bangladesh where every citizen, business, and institution has access to world-class digital services and opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-4xl md:text-5xl font-bold gradient-text mb-6">Why Choose Kloud?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    What sets us apart in Bangladesh's digital landscape
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center scroll-reveal">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-6 flex items-center justify-center mx-auto">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Innovation First</h3>
                    <p class="text-gray-600">Cutting-edge technology and solutions that stay ahead of the curve.</p>
                </div>

                <div class="text-center scroll-reveal">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl mb-6 flex items-center justify-center mx-auto">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Reliable Service</h3>
                    <p class="text-gray-600">99.99% uptime guarantee with 24/7 monitoring and support.</p>
                </div>

                <div class="text-center scroll-reveal">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl mb-6 flex items-center justify-center mx-auto">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Local Expertise</h3>
                    <p class="text-gray-600">Deep understanding of Bangladesh's unique market and needs.</p>
                </div>

                <div class="text-center scroll-reveal">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mb-6 flex items-center justify-center mx-auto">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Partnership Focus</h3>
                    <p class="text-gray-600">Building lasting relationships through exceptional service and support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto text-center scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Ready to <span class="gradient-text">Connect</span> with Us?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                Join thousands of satisfied customers who trust Kloud for their digital connectivity needs.
                Let's discuss how we can power your digital transformation.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{url('package')}}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    View Our Packages
                </a>
                <a href="{{url('/#contact')}}" class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-full font-semibold hover:border-blue-500 hover:text-blue-600 transition-all duration-300 hover-lift">
                    Get In Touch
                </a>
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