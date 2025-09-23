@extends('layouts.newFront')

@section('content')




    @include('frontend.new.parts.slider')
    
    @include('frontend.new.parts.package')

  <!--<section class="mt-32">-->
  <!--  <iframe data-aos="fade-up" -->
  <!--      src="https://openspeedtest.com/speedtest" -->
  <!--      style="border:none; width:100%; height:500px; overflow:hidden;" -->
  <!--      allow="autoplay; fullscreen">-->
  <!--  </iframe>-->
  <!--</section>-->

    <section class="mt-32 py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full filter blur-3xl float" style="animation-delay: -3s;"></div>
      </div>
      
      <div class="max-w-7xl mx-auto text-center relative z-10">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-8 fade-in-up" data-aos="fade-up">
          Test Your <span class="gradient-text">Current Speed</span>
        </h2>
        <p class="text-xl text-white/80 mb-12 fade-in-up" data-aos="fade-up" data-aos-delay="200">
          See how your current connection measures up
        </p>
        
        <div class="bg-white/10 backdrop-filter backdrop-blur-lg rounded-3xl p-8 shadow-2xl hover-glow" data-aos="zoom-in" data-aos-delay="400">
          <iframe 
            src="https://openspeedtest.com/speedtest" 
            style="border:none; width:100%; height:500px; overflow:hidden; border-radius: 20px;" 
            allow="autoplay; fullscreen"
            class="shadow-premium">
          </iframe>
        </div>
      </div>
    </section>


  <!-- PackageForm START  -->
  <div id="packageForm" class="max-w-7xl mx-auto px-4 py-10" data-aos-delay="300">


    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white rounded-2xl shadow-lg overflow-hidden">

      <!-- Left Side Form -->
      <div data-aos="fade-right" class="p-8">
        <h2 class="text-2xl font-bold mb-2">
          Order For <span class="text-[var(--color1)]">New Connection</span>
        </h2> 
        <p class="text-gray-600 mb-6">Fill up form our concern person will contact with you soon</p>

        <form action="{{url('send-email')}}" method="post" class="space-y-5"> @csrf
          <!-- Full Name -->
          <div>
            <label for="name" class="text-[var(--color1)] font-bold">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Full Name" 
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
          </div>

          <!-- Contact Number -->
          <div>
            <label for="" class="text-[var(--color1)] font-bold">Contact Number</label>
            <input type="text" name="phone" placeholder="Contact Number" 
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="text-[var(--color1)] font-bold">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" 
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" required>
          </div>

          <!-- Connection Address -->
          <div>
            <label for="" class="text-[var(--color1)] font-bold">Connection Address</label>
            <textarea name="address" placeholder="Connection Address" rows="3"
              class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
          </div>

          <!-- District -->
          <!--<div>-->
          <!--  <label for="" class="text-[var(--color1)] font-bold">District</label>-->
          <!--  <select class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">-->
          <!--    <option>District</option>-->
          <!--    <option>Dhaka</option>-->
          <!--    <option>Chittagong</option>-->
          <!--    <option>Khulna</option>-->
          <!--  </select>-->
          <!--</div>-->

          <!-- Upazila/Thana -->
          <!--<div>-->
          <!--  <label for="" class="text-[var(--color1)] font-bold">Upazila/Thana</label>-->
          <!--  <select class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">-->
          <!--    <option>Upazila/Thana</option>-->
          <!--    <option>Mirpur</option>-->
          <!--    <option>Banani</option>-->
          <!--  </select>-->
          <!--</div>-->




    <!-- Division -->
    <div>
      <label for="division" class="text-[var(--color1)] font-bold">Division</label>
      <select id="division" name="division" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
        <option value="">Select Division</option>
      </select>
    </div>

    <!-- District -->
    <div>
      <label for="district" class="text-[var(--color1)] font-bold">District</label>
      <select id="district" name="district" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
        <option value="">Select District</option>
      </select>
    </div>

    <!-- Upazila/Thana -->
    <div>
      <label for="thana" class="text-[var(--color1)] font-bold">Upazila/Thana</label>
      <select id="thana" name="thana" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
        <option value="">Select Upazila/Thana</option>
      </select>
    </div>


          <!-- Packages -->
          <div>
            <label for="" class="text-[var(--color1)] font-bold">Select Packages</label>
            <select id="packageSelect" name="package" class="w-full px-4 py-2 mt-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
              <option>---Choose the packages---</option>
              <option>Kloud Mini</option>
              <option>Kloud Neo</option>
              <option>Kloud Stream</option>
              <option>Kloud Boost +</option>
              <option>Kloud Gamers</option>
              <option>Kloud Edge</option>
            </select>
          </div>
        
          <!-- Button -->
          <button type="submit"
            class="pulse-glow hover-lift w-full bg-[var(--color1)] hover:bg-white text-white hover:text-[var(--color1)] py-2 rounded-lg border-2 border-[var(--color1)] transition font-bold">
            Order Now
          </button>

        <!--<a href="#packageForm" data-package="Kloud Gamers" class="pulse-glow hover-lift package-btn mt-2 bg-white text-[var(--color1)] hover:text-white font-bold px-6 py-2 rounded-full border-2 border-[var(--color1)] hover:border-white hover:bg-[var(--color1)] transition-all">-->
        <!--  Select this Package-->
        <!--</a>-->

<!-- Script -->
<script>
  // Smooth scroll + set package
  document.querySelectorAll('.package-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();

      const target = document.querySelector(this.getAttribute('href'));
      const packageName = this.dataset.package;

      // Scroll smoothly
      target.scrollIntoView({ behavior: 'smooth' });

      // Set select value
      const select = document.getElementById('packageSelect');
      select.value = packageName;
    });
  });
</script>

        </form>
      </div>

      <!-- Right Side Background with Icons -->
      <div data-aos="fade-left" class="relative flex items-center justify-center bg-cover bg-center h-screen" 
        style="background-image: url('{{asset('tailwind/img/formRight.png')}}');">

<style>
  .orbit {
    position: absolute;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    animation: spin 100s linear infinite;
  }
  .orbit img, .orbit i {
    position: absolute;
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
    cursor: pointer;
  }
  .icon1 { top: 0; left: 50%; transform: translate(-50%, -50%); }
  .icon2 { top: 25%; right: 0; transform: translate(50%, -50%); }
  .icon3 { bottom: 25%; right: 0; transform: translate(50%, 50%); }
  .icon4 { bottom: 0; left: 50%; transform: translate(-50%, 50%); }
  .icon5 { bottom: 25%; left: 0; transform: translate(-50%, 50%); }
  .icon6 { top: 25%; left: 0; transform: translate(-50%, -50%); }

  @keyframes spin {
    100% { transform: rotate(360deg); }
  }
  .orbit:hover {
    animation-play-state: paused;
  }
  .orbit i:hover {
    transform: scale(1.5);
    z-index: 10;
    color: #ffeb3b; 
  }
</style>

        <!-- Circle Orbit -->
        <div class="orbit">

          <a href="#" ><i class="icon1 fas fa-phone text-5xl text-white rounded-xl"></i></a>
          <a href="#" ><i class="icon2 fa-solid fa-question text-5xl text-white rounded-xl"></i></a>
          <a href="#" ><i class="icon3 fas fa-cog text-5xl text-white rounded-xl"></i></a>
          <a href="#" ><i class="icon4 fas fa-search text-5xl text-white rounded-xl"></i></a>
          <a href="#" ><i class="icon5 fas fa-comment-dots text-5xl text-white rounded-xl"></i></a>
          <a href="#" ><i class="icon6 fas fa-microphone text-5xl text-white rounded-xl"></i></a>

        </div>








        <!-- Center Circle -->
        <div class="absolute w-40 h-40 flex items-center justify-center rounded-full bg-white shadow-lg">
          <span class="text-5xl font-bold text-[var(--color1)]" style="font-family: 'Montserrat';">24/7</span>
        </div>

        <p class="absolute bottom-8 text-white text-2xl font-semibold">24/7 Customer Support</p>
      </div>

    </div>
  </div>
  <!-- PackageForm END  -->


@endsection