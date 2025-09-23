<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Momentous Education - Your Path to Academic Excellence</title>

    <meta name="description" content="Momentous Education offers expert guidance, test preparation, and academic consulting to help students achieve their dreams of studying abroad. Start your success journey with us today.">
    
    <meta name="keywords" content="Momentous Education, Study Abroad, IELTS Coaching, TOEFL, University Admission, Education Consultancy, Academic Counseling, Student Visa, Bangladesh, UK USA Canada Australia">
    
    <meta name="author" content="Momentous Education">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.momentouseducation.com">
    <meta property="og:title" content="Momentous Education - Your Path to Academic Excellence">
    <meta property="og:description" content="Expert study abroad guidance and academic services. Build your global future with Momentous Education.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.momentouseducation.com">
    <meta property="twitter:title" content="Momentous Education - Your Path to Academic Excellence">
    <meta property="twitter:description" content="Explore study abroad options, test prep, and consulting services with Momentous Education.">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.momentouseducation.com">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link {{'/'==request()->path()?'active':''}}" href="{{ url('/') }}">Home</a></li>
                    @if (Route::has('login'))
                        @auth
                           <li class="nav-item"><a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            
        </main>
    </div>
</body>
</html>



