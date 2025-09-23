  <!-- Slider Section -->
  <div class="swiper mySwiper w-full h-[85vh] relative">
    <style>
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: var(--swiper-pagination-bullet-border-radius,50%);
            background: rgb(255, 255, 255);
            opacity: var(--swiper-pagination-bullet-inactive-opacity, .2);
        }
        .swiper-pagination-bullet-active {
            opacity: var(--swiper-pagination-bullet-opacity, 1);
            background: var(--color1);
        }
        @media only screen and (max-width: 600px) {
            .h-\[85vh\] {
                height: 50vh;
            }
        }
    </style>
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide relative">
        <img src="{{asset('tailwind/img/sliders/1.webp')}}" alt="Slider 1" class="w-full md:h-screen h-[50vh] object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
          <h2 class="text-3xl md:text-5xl font-bold text-white text-center px-4">
            Experience the Next Level
          </h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide relative">
        <img src="{{asset('tailwind/img/sliders/2.webp')}}" alt="Slider 2" class="w-full md:h-screen h-[50vh] object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
          <h2 class="text-3xl md:text-5xl font-bold text-white text-center px-4">
            Connect With Innovation
          </h2>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide relative">
        <img src="{{asset('tailwind/img/sliders/3.webp')}}" alt="Slider 3" class="w-full md:h-screen h-[50vh] object-cover object-center" />
        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
          <h2 class="text-3xl md:text-5xl font-bold text-white text-center px-4">
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
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
