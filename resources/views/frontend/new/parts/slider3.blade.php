<!-- Slider Section -->
<div class="swiper mySwiper w-full h-[85vh] relative overflow-hidden perspective-1000">
  <style>
    /* Custom Swiper Pagination */
    .swiper-pagination-bullet {
      width: 16px;
      height: 16px;
      background: rgb(255, 255, 255);
      opacity: 0.3;
      border-radius: 50%;
      transition: all 0.3s ease;
    }
    .swiper-pagination-bullet-active {
      opacity: 1;
      transform: scale(1.5);
      background: #0066CC;
    }

    /* Animated gradient overlay */
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Floating shadow animation */
    @keyframes floatShadow {
      0%, 100% { box-shadow: 0 10px 40px rgba(0,102,204,0.2); transform: translateY(0); }
      50% { box-shadow: 0 20px 60px rgba(0,102,204,0.3); transform: translateY(-10px); }
    }

    /* Slide-in text */
    @keyframes slideInLeft {
      0% { transform: translateX(-100%) scale(0.8); opacity: 0; }
      100% { transform: translateX(0) scale(1); opacity: 1; }
    }
    @keyframes slideInRight {
      0% { transform: translateX(100%) scale(0.8); opacity: 0; }
      100% { transform: translateX(0) scale(1); opacity: 1; }
    }

    .animate-slide-left { animation: slideInLeft 1s ease-out forwards; }
    .animate-slide-right { animation: slideInRight 1s ease-out forwards; }

    /* Floating shadow class */
    .floating-shadow { animation: floatShadow 4s ease-in-out infinite; }

    /* Gradient overlay class */
    .animated-gradient {
      background: linear-gradient(270deg, rgba(0,102,204,0.4), rgba(0,168,255,0.3), rgba(79,70,229,0.4));
      background-size: 600% 600%;
      animation: gradientMove 12s ease infinite;
    }
  </style>

  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide relative">
      <div class="w-full md:h-screen h-[50vh] transform transition-transform duration-700 hover:scale-105 rounded-3xl floating-shadow overflow-hidden">
        <img src="{{asset('tailwind/img/sliders/1.webp')}}" alt="Slider 1" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center animated-gradient">
          <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-left">
            Experience the Next Level
          </h2>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide relative">
      <div class="w-full md:h-screen h-[50vh] transform transition-transform duration-700 hover:scale-105 rounded-3xl floating-shadow overflow-hidden">
        <img src="{{asset('tailwind/img/sliders/2.webp')}}" alt="Slider 2" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center animated-gradient">
          <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-right">
            Connect With Innovation
          </h2>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide relative">
      <div class="w-full md:h-screen h-[50vh] transform transition-transform duration-700 hover:scale-105 rounded-3xl floating-shadow overflow-hidden">
        <img src="{{asset('tailwind/img/sliders/3.webp')}}" alt="Slider 3" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center animated-gradient">
          <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-left">
            Fast, Reliable & Secure
          </h2>
        </div>
      </div>
    </div>

  </div>

  <!-- Pagination -->
  <div class="swiper-pagination"></div>
</div>

<!-- Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 1200,
    effect: 'slide', // you can try 'cards', 'creative', or 'fade' for unique effects
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
