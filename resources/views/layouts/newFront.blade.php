<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Kloud Technologies Limited</title>

    <link rel="shortcut icon" href="{{asset('tailwind/img/favicon.png')}}" type="image/x-icon">

    <!-- GOOGLE FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/brands.min.css" integrity="sha512-WxpJXPm/Is1a/dzEdhdaoajpgizHQimaLGL/QqUIAjIihlQqlPQb1V9vkGs9+VzXD7rgI6O+UsSKl4u5K36Ydw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css" integrity="sha512-M5Kq4YVQrjg5c2wsZSn27Dkfm/2ALfxmun0vUE3mPiJyK53hQBHYCVAtvMYEC7ZXmYLg8DVG4tF8gD27WmDbsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/regular.min.css" integrity="sha512-x3gns+l9p4mIK7vYLOCUoFS2P1gavFvnO9Its8sr0AkUk46bgf9R51D8xeRUwCSk+W93YbXWi19BYzXDNBH5SA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/solid.min.css" integrity="sha512-EHa6vH03/Ty92WahM0/tet1Qicl76zihDCkBnFhN3kFGQkC+mc86d7V+6y2ypiLbk3h0beZAGdUpzfMcb06cMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>
    :root {
      --color1: #8F18FF;
      /*--color1: #007DB2;*/
      /* --color1: red; */
    }
    *{ font-family: "Poppins", serif; }
    h1, h2, h3, h4, h5, h6{ font-family: "Roboto", serif; }
    html {
      scroll-behavior: smooth;
    }
      /* Pulse animation */
      /*.pulse-glow {*/
      /*  animation: pulseGlow 2s ease-in-out infinite alternate;*/
      /*}*/

      @keyframes pulseGlow {
        0% {
          box-shadow: 0 0 0 0 rgba(0, 125, 178, 0.7);
        }
        100% {
          box-shadow: 0 0 0 20px rgba(0, 125, 178, 0);
        }
      }

      /*.hover-lift {*/
      /*  transition: transform 0.3s ease, box-shadow 0.3s ease;*/
      /*}*/

      /*.hover-lift:hover {*/
      /*  transform: translateY(-8px);*/
      /*  box-shadow: 0 20px 40px rgba(0, 125, 178, 0.15);*/
      /*}*/



    /*ANIMATED SHADOW START*/
    @keyframes shadow-move {
      0% { box-shadow: 0 0 10px var(--color1); }
      50% { box-shadow: 0 10px 20px var(--color1); }
      100% { box-shadow: 0 0 10px var(--color1); }
    }
    .animated-shadow {
      animation: shadow-move 2s infinite ease-in-out;
    }
    /*ANIMATED SHADOW END*/

  </style>

<style>
  .package-card {
    position: relative;
    overflow: hidden; /* keep shine inside card */
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

  /* keep content above shine */
  .package-card * {
    position: relative;
    z-index: 3;
  }
</style>
  <!-- Swiper.js CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
      tailwind.config = {
        theme: {
          extend: {
              
              
              
            colors: {
              red1: "red",
            },
            fontSize: {
              size77: "77px", 
            },
            fontFamily: {
              Lato: ['Lato', 'sans-serif'],
              Roboto: ['Roboto', 'sans-serif'],
              Poppins: ['Poppins', 'sans-serif'],
              TitilliumWeb: ['Titillium Web', 'sans-serif'],
              Inter: ['Inter', 'sans-serif'],
              Montserrat: ['Montserrat', 'sans-serif'],
            },
            
  animation: {
    'fade-in': 'fadeIn 1.5s ease-in-out',
    'slide-up': 'slideUp 1.2s ease-in-out',
    'float': 'float 4s ease-in-out infinite',
  },
  keyframes: {
    fadeIn: {
      '0%': { opacity: 0 },
      '100%': { opacity: 1 },
    },
    slideUp: {
      '0%': { transform: 'translateY(30px)', opacity: 0 },
      '100%': { transform: 'translateY(0)', opacity: 1 },
    },
    float: {
      '0%, 100%': { transform: 'translateY(0)' },
      '50%': { transform: 'translateY(-12px)' },
    },
  },
            
            
          },
        },
      };
    </script>


  </head>
  <body class="font-sans">



    <!-- Top bar -->
    <div class="bg-gradient-to-r from-[#0baeecbf] to-[#2c3cb9cc] text-white text-sm flex justify-end items-center px-6 py-2">
      <span class="flex items-center gap-2">
        <i class="fa-solid fa-phone"></i>
        09649-161216
      </span>
    </div>


    <!-- Navbar -->
    <div class="sticky top-0 z-50">
      <nav id="navbar" class="bg-[#ffffff20] backdrop-blur-md shadow-lg transition-all duration-1000 ease-in-out border border-white/20">
        <script>
          const navbar = document.getElementById('navbar');

          window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
              // scrolled down → solid white with premium shadow, constrained width, and rounded corners
              navbar.classList.remove('bg-[#ffffff20]', 'border-white/20');
              navbar.classList.add('bg-white', 'shadow-2xl', 'border-gray-200/50', 'max-w-7xl', 'mx-auto', 'rounded-full');
            } else {
              // top → glassmorphism, full width, square corners
              navbar.classList.remove('bg-[white]', 'shadow-2xl', 'border-gray-200/50', 'max-w-7xl', 'mx-auto', 'rounded-full');
              navbar.classList.add('bg-[#ffffff20]', 'border-white/20');
            }
          });
        </script>

        <div class="px-6 sm:px-8 lg:px-10 max-w-7xl mx-auto">
        <div class="flex justify-between items-center py-4">

            <!-- Logo -->
            <a href="{{url('/')}}" class="flex items-center space-x-2">
                <img src="{{asset('kloud-logo.png')}}" alt="Logo" class="h-12 w-auto" />
            </a>


          <!-- Desktop Menu -->
          <ul class="hidden lg:flex space-x-6 text-gray-800 font-medium">
            <li><a href="{{url('/')}}" class="hover:text-[var(--color1)] {{ request()->is('/') ? 'text-[var(--color1)] font-bold' : '' }}">Home</a></li>
            <li><a href="{{url('package')}}" class="hover:text-[var(--color1)] {{ request()->is('package') ? 'text-[var(--color1)] font-bold' : '' }}">Packages</a></li>
            <li><a href="{{url('business')}}" class="hover:text-[var(--color1)] {{ request()->is('business') ? 'text-[var(--color1)] font-bold' : '' }}">Business</a></li>
            <li><a href="{{url('about')}}" class="hover:text-[var(--color1)] {{ request()->is('about') ? 'text-[var(--color1)] font-bold' : '' }}">About Us</a></li>
            <li>
              <a href="#" class="text-orange-600 flex items-center gap-1">
                <span>
                    <svg width="14" height="15" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.62375 10.6241C5.43375 10.8622 4.725 11.6108 4.725 12.674C4.725 13.8138 5.69625 14.7325 6.90375 14.7325C8.6975 14.7325 10.15 13.3205 10.15 11.5768C10.15 10.6666 10.0188 9.77347 9.7475 8.92286C9.05625 9.83301 7.8225 10.3859 6.62375 10.6241ZM8.3125 0C8.3125 0 8.96 2.25411 8.96 4.08291C8.96 5.83516 7.77875 7.25567 5.97625 7.25567C4.165 7.25567 2.8 5.83516 2.8 4.08291L2.82625 3.77669C1.05875 5.81815 0 8.46353 0 11.3386C0 15.0983 3.1325 18.1434 7 18.1434C10.8675 18.1434 14 15.0983 14 11.3386C14 6.75381 11.7338 2.6624 8.3125 0ZM7 16.4422C4.10375 16.4422 1.75 14.1541 1.75 11.3386C1.75 10.0372 2.0125 8.75274 2.5025 7.5704C3.38625 8.42951 4.61125 8.95688 5.97625 8.95688C8.30375 8.95688 10.1325 7.40027 10.5963 5.1887C11.6725 7.06003 12.25 9.16103 12.25 11.3386C12.25 14.1541 9.89625 16.4422 7 16.4422Z" fill="url(#paint0_linear_59_447)"/>
                    <defs>
                    <linearGradient id="paint0_linear_59_447" x1="-1.05" y1="-6.69429" x2="6.59537" y2="18.2674" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FAFF0D"/>
                    <stop offset="1" stop-color="#E73700"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </span> Offers Today
              </a>
            </li>
          </ul>

          <!-- Buttons (desktop) -->
          <div class="hidden lg:flex space-x-3">
            <a href="{{url('pay-online')}}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">Smart Pay</a>
            <a href="{{url('self-care')}}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">Self Care</a>
            <!-- <a href="#" class="bg-[var(--color1)] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#005f91]">Self Care</a> -->
          </div>

          <!-- Mobile Hamburger -->
          <div class="lg:hidden">
            <button id="menu-btn" class="text-gray-700 focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          
        </div>
      </div>

      <!-- Mobile Menu (hidden by default) -->
      <div id="mobile-menu" class="hidden lg:hidden px-4 pb-4 space-y-3">
        <a href="{{url('/')}}" class="block text-gray-800 font-medium hover:text-[var(--color1)] {{ request()->is('/') ? 'text-[var(--color1)] font-bold' : '' }}">Home</a>
        <a href="{{url('package')}}" class="block text-gray-800 font-medium hover:text-[var(--color1)] {{ request()->is('package') ? 'text-[var(--color1)] font-bold' : '' }}">Packages</a>
        <a href="{{url('business')}}" class="block text-gray-800 font-medium hover:text-[var(--color1)] {{ request()->is('business') ? 'text-[var(--color1)] font-bold' : '' }}">Business</a>
        <a href="{{url('about')}}" class="block text-gray-800 font-medium hover:text-[var(--color1)] {{ request()->is('about') ? 'text-[var(--color1)] font-bold' : '' }}">About Us</a>
        <a href="#" class="block text-orange-600 font-medium">
            <svg width="14" height="15" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.62375 10.6241C5.43375 10.8622 4.725 11.6108 4.725 12.674C4.725 13.8138 5.69625 14.7325 6.90375 14.7325C8.6975 14.7325 10.15 13.3205 10.15 11.5768C10.15 10.6666 10.0188 9.77347 9.7475 8.92286C9.05625 9.83301 7.8225 10.3859 6.62375 10.6241ZM8.3125 0C8.3125 0 8.96 2.25411 8.96 4.08291C8.96 5.83516 7.77875 7.25567 5.97625 7.25567C4.165 7.25567 2.8 5.83516 2.8 4.08291L2.82625 3.77669C1.05875 5.81815 0 8.46353 0 11.3386C0 15.0983 3.1325 18.1434 7 18.1434C10.8675 18.1434 14 15.0983 14 11.3386C14 6.75381 11.7338 2.6624 8.3125 0ZM7 16.4422C4.10375 16.4422 1.75 14.1541 1.75 11.3386C1.75 10.0372 2.0125 8.75274 2.5025 7.5704C3.38625 8.42951 4.61125 8.95688 5.97625 8.95688C8.30375 8.95688 10.1325 7.40027 10.5963 5.1887C11.6725 7.06003 12.25 9.16103 12.25 11.3386C12.25 14.1541 9.89625 16.4422 7 16.4422Z" fill="url(#paint0_linear_59_447)"/>
            <defs>
            <linearGradient id="paint0_linear_59_447" x1="-1.05" y1="-6.69429" x2="6.59537" y2="18.2674" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FAFF0D"/>
            <stop offset="1" stop-color="#E73700"/>
            </linearGradient>
            </defs>
            </svg>
            Offers Today
        </a>
        <div class="flex flex-col gap-2 pt-2">
          <a href="{{url('pay-online')}}" class="text-center bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">Quick Pay</a>
          <a href="{{url('self-care')}}" class="text-center bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-pulse-glow">Self Care</a>
        </div>
      </div>

      </nav>
    </div>
    <script>
      // Mobile menu toggle
      const btn = document.getElementById("menu-btn");
      const menu = document.getElementById("mobile-menu");
      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>

    @yield('content')

  <!-- Footer Section -->
  <footer class="bg-gradient-to-r from-blue-500 to-purple-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-12 gap-8">

      <!-- Left Section -->
      <div class="md:col-span-6">
        <div class="flex items-center gap-2 mb-4">
          <img src="{{asset('tailwind/img/logoWhite.png')}}" alt="Logo" class="w-auto h-auto">
          <!-- <h2 class="text-xl font-bold">KLOUD TECHNOLOGIES</h2> -->
        </div>
        <h3 class="text-lg font-semibold mb-3">Kloud Technologies Limited</h3>
        <p class="text-sm mt-2">
          Shanta Western Tower, Suit # 904, Level 9, 186 Bir Uttam <br>
          Mir Sawkat Road, Tejgaon I/A, Dhaka â€“ 1208, Bangladesh.
        </p>

        <div class="mt-4">
          <h3 class="text-lg font-semibold mb-3">QUALITY POLICY</h3>
          <p class="text-sm mt-1">
            Facilitate seamless information flow through innovative ICT Infrastructure and services. <br>
            Kloud Technologies Limited is ISO 9001:2015 Certified Company.
          </p>
        </div>

        <div class="mt-4">
          <h3 class="text-lg font-semibold mb-3">POLICY</h3>
          <h6></h6>
          <p class="text-sm mt-1">
            Kloud is committed to ensuring information security by complying applicable ISO 27001:2022 standard & regulatory requirements and continually improving the ISMS to support our business objectives.
          </p>
        </div>
      </div>

      <!-- Middle Section -->
      <div class="md:col-span-4">
        <h3 class="text-lg font-semibold mb-3">Contact</h3>
        <ul class="space-y-3 text-sm">
          <li class="flex items-start gap-2">
            <span class="text-xl"><i class="fa-solid fa-location-dot"></i></span>
            <a href="#" class="hover:underline underline-offset-4">Dom-Inno, House-13, Road-7, Block-F, Banani,1213, Dhaka, Bangladesh</a>
          </li>
          <li class="flex items-center gap-2">
            <span class="text-xl"><i class="fa-solid fa-phone"></i></span>
            <a href="tel:+8809649161216" class="hover:underline underline-offset-4">+880 9649-161216</a>
          </li>
          <li class="flex items-center gap-2">
            <span class="text-xl"><i class="fa-brands fa-whatsapp"></i></span>
            <a href="https://wa.me/8801313752575" class="hover:underline underline-offset-4">+880 1313-752575</a>
          </li>
          <li class="flex items-center gap-2">
            <span class="text-xl"><i class="fa-solid fa-envelope"></i></span>
            <a href="mailto:contact@kloud.com.bd" class="hover:underline underline-offset-4">contact@kloud.com.bd</a>
          </li>
        </ul>
      </div>

      <!-- Right Section -->
      <div class="md:col-span-2">
        <h3 class="text-lg font-semibold mb-3">Others</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:underline underline-offset-4">Career</a></li>
          <li><a href="#" class="hover:underline underline-offset-4">Our Policies</a></li>
          <li><a href="#" class="hover:underline underline-offset-4">Self Care</a></li>
        </ul>

        <!-- Social Icons -->
        <div class="flex gap-4 mt-6 text-2xl">
          <a href="https://www.linkedin.com/company/kloudtechnologieslimited" class="hover:text-gray-200 transform hover:scale-[1.5] transition duration-300"><i class="fab fa-linkedin"></i></a>
          <a href="https://www.facebook.com/Kloud.Technologies.Ltd" class="hover:text-gray-200 transform hover:scale-[1.5] transition duration-300"><i class="fab fa-facebook"></i></a>
          <a href="#" class="hover:text-gray-200 transform hover:scale-[1.7] transition duration-300"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-gray-200 transform hover:scale-[1.7] transition duration-300"><i class="fab fa-instagram"></i></a>
        </div>

      </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-sky-500 text-center py-4 px-2 text-sm">
      Â© 2025 Kloud Technologies Limited. All Rights Reserved. Powered By <b>alawaf</b>
    </div>
  </footer>

    <!-- Swiper.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{asset('new/js/main.js')}}?v={{ time() }}"></script>

  </body>
</html>