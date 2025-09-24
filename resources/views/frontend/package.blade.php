@extends('layouts.newFront')

@section('content')
<style>
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

    .package-card {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .package-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.3),
            transparent
        );
        z-index: 2;
        transition: left 0.5s ease;
    }

    .package-card:hover::before {
        left: 100%;
    }

    .package-card * {
        position: relative;
        z-index: 3;
    }
</style>
<!-- Page Header -->
<section class="pt-24 pb-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Our Internet Packages</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Choose the perfect internet package for your home or business needs
        </p>
    </div>
</section>

<!-- Residential Packages Section -->
@if(count($ResidentialsPackages)>0)
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold gradient-text mb-4">Residential Packages</h2>
            <p class="text-lg text-gray-600">Perfect internet packages for your home</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($ResidentialsPackages as $package)
            <div class="bg-white rounded-3xl p-8 shadow-lg border-2 border-gray-100 hover-lift package-card">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $package->name }}</h3>
                <div class="text-3xl font-bold gradient-text mb-4">{{ $package->plan }}Mbps</div>
                <div class="text-lg font-semibold text-gray-700 mb-4">Features</div>
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
                    Select Package
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Business Packages Section -->
@if(count($BusinessPackages)>0)
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold gradient-text mb-4">Business Packages</h2>
            <p class="text-lg text-gray-600">Enterprise-grade internet solutions for your business</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($BusinessPackages as $package)
            <div class="bg-white rounded-3xl p-8 shadow-lg border-2 border-gray-100 hover-lift package-card">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $package->name }}</h3>
                <div class="text-3xl font-bold gradient-text mb-4">{{ $package->plan }}Mbps</div>
                <div class="text-lg font-semibold text-gray-700 mb-4">Business Features</div>
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
                    Select Package
                </button>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<script>
    // Package Selection Function
    function selectPackage(packageName) {
        // Store the selected package in sessionStorage
        sessionStorage.setItem('selectedPackage', packageName);

        // Redirect to home page with contact section anchor
        window.location.href = '/#contact';
    }
</script>

@endsection