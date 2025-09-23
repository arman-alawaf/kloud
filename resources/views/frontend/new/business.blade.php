@extends('layouts.newFront')

@section('content')

    <!--<section class="py-20 flex items-center justify-center capitalize">-->
    <!--    business-->
    <!--</section>-->
    
<section class="h-screen flex flex-col items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white text-center">
  
  <!-- Animated Title -->
  <h1 class="text-6xl md:text-7xl font-extrabold animate-pulse">
    Coming Soon
  </h1>

  <!-- Subtitle -->
  <p class="mt-4 text-lg md:text-xl opacity-90">
    Something amazing is on the way 🚀
  </p>

  <!-- Notify Button -->
  <button
    class="mt-10 px-8 py-4 bg-white text-indigo-600 font-bold rounded-full shadow-lg hover:scale-110 transform transition duration-300 ease-in-out animate-bounce"
  >
    Notify Me
  </button>
</section>


@endsection