<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kloud.com.bd/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 08:27:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bill Management System">
    <meta name="keywords" content="Amit Saha, Bs amit">
    <meta name="author" content="Amit Saha">
    <link rel="icon" href="{{asset('assets/include/img/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/include/img/favicon.png')}}" type="image/x-icon">
    <title>Nationwide ISP | Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/backend/vendors/themify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/backend/vendors/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/backend/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/backend/responsive.css')}}">
  
    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

<script type="text/javascript" class="flasher-js">(function() {    var rootScript = '../cdn.jsdelivr.net/npm/%40flasher/flasher%401.3.2/dist/flasher.min.js';    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    function mergeOptions(first, second) {        return {            context: merge(first.context || {}, second.context || {}),            envelopes: merge(first.envelopes || [], second.envelopes || []),            options: merge(first.options || {}, second.options || {}),            scripts: merge(first.scripts || [], second.scripts || []),            styles: merge(first.styles || [], second.styles || []),        };    }    function merge(first, second) {        if (Array.isArray(first) && Array.isArray(second)) {            return first.concat(second).filter(function(item, index, array) {                return array.indexOf(item) === index;            });        }        return Object.assign({}, first, second);    }    function renderOptions(options) {        if(!window.hasOwnProperty('flasher')) {            console.error('Flasher is not loaded');            return;        }        requestAnimationFrame(function () {            window.flasher.render(options);        });    }    function render(options) {        if ('loading' !== document.readyState) {            renderOptions(options);            return;        }        document.addEventListener('DOMContentLoaded', function() {            renderOptions(options);        });    }    if (1 === document.querySelectorAll('script.flasher-js').length) {        document.addEventListener('flasher:render', function (event) {            render(event.detail);        });        document.addEventListener('livewire:navigating', function () {    var elements = document.querySelectorAll('.fl-no-cache');    for (var i = 0; i < elements.length; i++) {        elements[i].remove();    }});    }    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        render(options);    } else {        var tag = document.createElement('script');        tag.setAttribute('src', rootScript);        tag.setAttribute('type', 'text/javascript');        tag.onload = function () {            render(options);        };        document.head.appendChild(tag);    }})();</script>
</head>
  <body>

      @yield('content')

      <script src="{{asset('assets/js/backend/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/backend/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/backend/config.js')}}"></script>
      <script src="{{asset('assets/js/backend/script.js')}}"></script>

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

  </body>

<!-- Mirrored from kloud.com.bd/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jul 2025 08:27:14 GMT -->
</html>