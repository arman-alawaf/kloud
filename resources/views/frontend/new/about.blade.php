@extends('layouts.newFront')

@section('content')

    <!--<section class="py-20 flex items-center justify-center capitalize">-->
    <!--    about us-->
    <!--</section>-->
    
<!--<section class="h-screen flex flex-col items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white text-center">-->

<!--  <h1 class="text-6xl md:text-7xl font-extrabold animate-pulse">-->
<!--    Coming Soon-->
<!--  </h1>-->

<!--  <p class="mt-4 text-lg md:text-xl opacity-90">-->
<!--    Something amazing is on the way ðŸš€-->
<!--  </p>-->

<!--  <button-->
<!--    class="mt-10 px-8 py-4 bg-white text-indigo-600 font-bold rounded-full shadow-lg hover:scale-110 transform transition duration-300 ease-in-out animate-bounce"-->
<!--  >-->
<!--    Notify Me-->
<!--  </button>-->
<!--</section>-->






<!--<section class="relative py-20 bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-500 text-white">-->
<!--  <div class="max-w-6xl mx-auto px-6 lg:px-12">-->

<!--    <div class="text-center mb-12">-->
<!--      <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight animate-fade-in">-->
<!--        About Us-->
<!--      </h2>-->
<!--      <div class="mt-2 w-20 h-1 bg-white mx-auto rounded-full animate-pulse"></div>-->
<!--    </div>-->

<!--    <div class="grid lg:grid-cols-2 gap-12 items-center">-->

<!--      <div class="space-y-6 animate-slide-up">-->
<!--        <p class="leading-relaxed text-lg">-->
<!--          Launched in 2019, <span class="font-bold">Kloud Technologies Limited</span> burst onto the scene with a fiery mission: to supercharge connectivity across Bangladesh. As a top-tier Internet Service Provider (ISP) and National Internet Exchange (NIX), we are committed to delivering blazing-fast, reliable, and secure internet solutions that empower homes, businesses, and enterprises nationwide.-->
<!--        </p>-->

<!--        <p class="leading-relaxed text-lg">-->
<!--          Our strength lies in the combination of innovative technology, industry expertise, and a dedicated team. We offer customized solutions ranging from dedicated data links, IT infrastructure management, and cloud services to AI-powered automation and integrated software solutions.-->
<!--        </p>-->

<!--        <p class="leading-relaxed text-lg">-->
<!--          Beyond technology, we believe in building lasting relationships through exceptional customer support and forward-thinking solutions. Our vision is to obliterate the digital divide, empower enterprises, and create a connected, future-ready Bangladesh.-->
<!--        </p>-->
<!--      </div>-->

<!--      <div class="flex justify-center animate-float">-->
<!--        <img -->
<!--          src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" -->
<!--          alt="Kloud Technologies Illustration"-->
<!--          class="w-80 md:w-96 drop-shadow-2xl rounded-2xl"-->
<!--        >-->
<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</section>-->





<section class="relative py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-12">

    <!-- Heading -->
    <div class="text-center mb-12">
      <!--<h2 class="text-4xl md:text-5xl font-extrabold text-indigo-600 animate-fade-in">-->
      <!--  <span>About</span> <span>Us</span>-->
      <!--</h2>-->
      
    <style>
    .slide-left {
      animation: slideInLeft 1s forwards ease-out;
    }
    
    .slide-right {
      animation: slideInRight 1s forwards ease-out;
    }
    
    @keyframes slideInLeft {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }
    
    @keyframes slideInRight {
      0% {
        transform: translateX(100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }
    
    </style>  
    <h2 class="flex justify-center gap-2 text-4xl md:text-5xl font-semibold text-indigo-600 overflow-hidden">
      <span class="slide-left inline-block">About</span>
      <span class="slide-right inline-block">Us</span>
    </h2>

 
      
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
        Empowering Bangladesh with blazing-fast internet and next-gen digital solutions since 2019.
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid lg:grid-cols-2 gap-12 items-center md:text-start text-center">
      
      <!-- Left: Company Story -->
      <div class="space-y-6 animate-slide-up">
        <p class="leading-relaxed text-gray-700 text-lg">
          Launched in 2019, <span class="font-semibold text-indigo-600">Kloud Technologies Limited</span> 
          burst onto the scene with a mission to supercharge connectivity across Bangladesh. 
          As a top-tier <span class="font-semibold">Internet Service Provider (ISP)</span> and 
          <span class="font-semibold">National Internet Exchange (NIX)</span>, we deliver 
          reliable and secure internet solutions to homes, businesses, and enterprises nationwide.
        </p>

        <p class="leading-relaxed text-gray-700 text-lg">
          Our cutting-edge infrastructure spans both urban and remote regions, ensuring 
          seamless connectivity and access to advanced broadband and cloud services. 
          At Kloud, we don’t just connect networks—we ignite digital progress and support 
          the vision of <span class="font-semibold text-indigo-600">Digital Bangladesh</span>.
        </p>

        <ul class="space-y-3">
          <li class="flex items-center gap-3">
            <span class="w-3 h-3 bg-indigo-600 rounded-full animate-ping"></span>
            <span>High-speed Broadband & Fiber Connectivity</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="w-3 h-3 bg-indigo-600 rounded-full animate-ping"></span>
            <span>Dedicated Data Links & Cloud Services</span>
          </li>
          <li class="flex items-center gap-3">
            <span class="w-3 h-3 bg-indigo-600 rounded-full animate-ping"></span>
            <span>AI-powered Automation & IT Infrastructure</span>
          </li>
        </ul>
      </div>

      <!-- Right: Illustration / Image -->
      <div class="flex justify-center animate-float">
        <img 
          src="{{asset('new/aboutSo.webp')}}" 
          alt="Internet Service Illustration"
          class="w-90 md:w-100 drop-shadow-2xl rounded-xl"
        >
      </div>

    </div>
    
  </div>
</section>


@endsection