<!-- {{asset('assets/')}} -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kloud.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 08:26:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/include/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/include/img/favicon.png')}}" type="image/x-icon">
    <title> Welcome | Nationwide ISP </title>
    <link rel="stylesheet" href="{{asset('assets/include/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/include/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/include/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap" rel="stylesheet">

    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <script type="text/javascript" class="flasher-js">(function() {    var rootScript = '../cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js';    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    function mergeOptions(first, second) {        return {            context: merge(first.context || {}, second.context || {}),            envelopes: merge(first.envelopes || [], second.envelopes || []),            options: merge(first.options || {}, second.options || {}),            scripts: merge(first.scripts || [], second.scripts || []),            styles: merge(first.styles || [], second.styles || []),        };    }    function merge(first, second) {        if (Array.isArray(first) && Array.isArray(second)) {            return first.concat(second).filter(function(item, index, array) {                return array.indexOf(item) === index;            });        }        return Object.assign({}, first, second);    }    function renderOptions(options) {        if(!window.hasOwnProperty('flasher')) {            console.error('Flasher is not loaded');            return;        }        requestAnimationFrame(function () {            window.flasher.render(options);        });    }    function render(options) {        if ('loading' !== document.readyState) {            renderOptions(options);            return;        }        document.addEventListener('DOMContentLoaded', function() {            renderOptions(options);        });    }    if (1 === document.querySelectorAll('script.flasher-js').length) {        document.addEventListener('flasher:render', function (event) {            render(event.detail);        });        document.addEventListener('livewire:navigating', function () {    var elements = document.querySelectorAll('.fl-no-cache');    for (var i = 0; i < elements.length; i++) {        elements[i].remove();    }});    }    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        render(options);    } else {        var tag = document.createElement('script');        tag.setAttribute('src', rootScript);        tag.setAttribute('type', 'text/javascript');        tag.onload = function () {            render(options);        };        document.head.appendChild(tag);    }})();</script>

  <style>
    .btn-primary{
      transition:.3s;
      border:none;
      color: white;
      background: linear-gradient(to right,#8F18FF,#1BBBFF);
    }
    .btn-primary:hover{
      color: white;
      background: linear-gradient(to right, #1BBBFF,#8F18FF);
    }
  </style>
          
    {{$app->facebook_pixel}}
    
</head>
<body>
 
    <section class="">
      <nav class="navbar navbar-expand-lg navbar-light kloud_header">
        <div class="container">
          <a class="navbar-brand kloud_head_logo" href="{{url('/')}}"><img src="{{asset('assets/include/img/kloud-logo.png')}}" class="img-fluid" alt="img"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end header_menu_list" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{url('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('service') ? 'active' : '' }}" href="{{url('service')}}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('package') ? 'active' : '' }}" href="{{url('package')}}">Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('solution') ? 'active' : '' }}" href="{{url('solution')}}">Solutions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('news-media') ? 'active' : '' }}" href="{{url('news-media')}}">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{url('contact')}}">Contact</a>
              </li>
              <!--@guest-->
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{url('login')}}">Login</a>-->
              <!--</li>-->
              <!--@else-->
              <!--<li class="nav-item dropdown">-->
              <!--    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
              <!--        {{ Auth::user()->name }}-->
              <!--    </a>-->
              <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">-->

              <!--        <a class="dropdown-item" href="{{ url('dashboard') }}" >Dashboard</a>-->
                      
              <!--        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>-->
              <!--        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>-->
                      
              <!--    </div>-->
              <!--</li>-->
              <!--@endguest-->
            </ul>
          </div>
        </div>
      </nav>
    </section>
    
    @yield('content')

    <footer class="footer">
        <div class="container-fluid">
            <div class="row footer_main">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer_logo">
                       <img src="{{asset('assets/include/img/kloud-logo.png')}}" class="img-fluid" alt="img">
                        <div class="footet_social_link">
                        <ul>
                            <li><a href="https://www.facebook.com/Kloud.Technologies.Ltd" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="https://wa.me/8801313752572" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                            <!--<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>-->
                            <li><a href="https://www.linkedin.com/company/kloudtechnologieslimited" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                            <!--<li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>-->
                        </ul>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footet_quick_link">
                        <h6>Get in touch</h6>
                        <ul>
                            <li><i class="fa-solid fa-location-dot footer_icon"></i> <span>Shanta Western Tower, Suit # 904, Level 9, 186 Bir Uttam<br>
                              Mir Sawkat Road, Tejgaon I/A, Dhaka – 1208, Bangladesh.</span></li>
                            <li><i class="fa-solid fa-phone footer_icon"></i> <span><a href="tel:+8809649161216">+8809649161216</a></span></li>
                            <li><i class="fa-solid fa-envelope footer_icon"></i> <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="b4d7dbdac0d5d7c0f4dfd8dbc1d09ad7dbd99ad6d0">[email&#160;protected]</a></span></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footet_quick_link">
                        <h6>Property Cities</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Me</a></li>
                            <li><a href="#">All Art Works</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footet_quick_link">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">Browe all Categories</a></li>
                            <li><a href="#">Top Mortagages Rates</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="bottom_footer">
        <div>
            <p>© 2025 Nationwide ISP. All Rights Reserved.</p>
        </div>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
    <script rel="stylesheet" src="{{asset('assets/include/js/jquery-3.7.1.min.js')}}"></script>
    <script rel="stylesheet" src="{{asset('assets/include/js/all.js')}}"></script>
    <script rel="stylesheet" src="{{asset('assets/include/js/bootstrap.bundle.min.js')}}"></script>
    <script rel="stylesheet" src="{{asset('assets/include/js/script.html')}}"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          @if(session('success'))
              Swal.fire({
                  icon: 'success',
                  title: '{{ session('success') }}',
                  showConfirmButton: false,
                  timer: 4000,
                  timerProgressBar: true,
              });
          @elseif(session('error'))
              Swal.fire({
                  icon: 'error',
                  title: '{{ session('error') }}',
                  showConfirmButton: false,
                  timer: 4000,
                  timerProgressBar: true,
              });
          @endif
        });
    </script>

    <!-- after submit start -->
    <script>
        const form = document.querySelector('.afterSubmitForm');
        const btn = document.querySelector('.afterSubmitBtn');
        form.addEventListener('submit', function () {
            btn.disabled = true;
            btn.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <!-- after submit end -->

    <!-- Mirrored from kloud.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 08:26:53 GMT -->
</html>