<div class="swiper mySwiper w-full h-[85vh] relative overflow-hidden">
  <style>
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
      background: #0066CC; /* your Kloud primary color */
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  </style>

  <div class="swiper-wrapper">
    <!-- Slide 1 -->
    <div class="swiper-slide relative">
      <img src="{{asset('tailwind/img/sliders/1.webp')}}" alt="Slider 1"
           class="w-full md:h-screen h-[50vh] object-cover object-center transform transition-transform duration-700 hover:scale-105" />
      <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-r from-blue-600/40 via-blue-400/30 to-indigo-600/40 animate-[gradientMove_8s_infinite]">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-in-left">
          Experience the Next Level
        </h2>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide relative">
      <img src="{{asset('tailwind/img/sliders/2.webp')}}" alt="Slider 2"
           class="w-full md:h-screen h-[50vh] object-cover object-center transform transition-transform duration-700 hover:scale-105" />
      <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-r from-indigo-600/40 via-blue-500/30 to-blue-600/40 animate-[gradientMove_8s_infinite]">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-in-right">
          Connect With Innovation
        </h2>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide relative">
      <img src="{{asset('tailwind/img/sliders/3.webp')}}" alt="Slider 3"
           class="w-full md:h-screen h-[50vh] object-cover object-center transform transition-transform duration-700 hover:scale-105" />
      <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-r from-blue-600/40 via-indigo-500/30 to-blue-400/40 animate-[gradientMove_8s_infinite]">
        <h2 class="text-3xl md:text-5xl font-extrabold text-white text-center px-4 animate-slide-in-left">
          Fast, Reliable & Secure
        </h2>
      </div>
    </div>
  </div>

  <!-- Slider Pagination -->
  <div class="swiper-pagination"></div>
</div>

<!-- Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    speed: 1000,
    effect: 'slide', // you can also try 'fade', 'cards', or 'creative'
  });
</script>
