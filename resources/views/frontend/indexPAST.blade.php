@extends('layouts.front')

@section('content')

    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner custom_inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/include/img/slider/4.png')}}" class="img-fluid" alt="img">
            <div class="carousel-caption  d-md-block banner_caption">
              <h5>Your Gateway to Seamless Interconnections</h5>
              <a href="{{url('contact')}}"><button class="btn custome_btn  d-none d-md-block">Nationwide ISP </button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/include/img/slider/1.png')}}" class="img-fluid" alt="img">
            <div class="carousel-caption  banner_caption">
              <h5>Connecting Bangladesh with High-Speed, Reliable Internet</h5>
              <a href="{{url('contact')}}"><button class="btn custome_btn d-none d-md-block">Nationwide ISP</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/include/img/slider/2.png')}}" class="img-fluid" alt="img">
            <div class="carousel-caption  banner_caption">
              <h5>Connecting Bangladesh with High-Speed, Reliable Internet</h5>
              <a href="{{url('contact')}}"><button class="btn custome_btn d-none d-md-block">Nationwide ISP </button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/include/img/slider/3.png')}}" class="img-fluid" alt="img">
            <div class="carousel-caption  banner_caption">
              <h5>Connecting Bangladesh with High-Speed, Reliable Internet</h5>
              <a href="{{url('contact')}}"><button class="btn custome_btn d-none d-md-block">Nationwide ISP </button></a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
 
    <!-- header part End-->

    <!-- Home page Start -->

    <section class="key_highlight_sec">
      <div class="container">
        <div class="key_highlight">
          <div class="">
            <div class="key_highlight_sec_text">
              <h1>Your Journey to Limitless Connectivity Begins Here! </h1>
              <p>At <b>Kloud Technologies Limited,</b> we don’t just provide internet—we redefine how you experience it. As a <b>Premium Internet Service Provider</b> and a leading <b>Internet Exchange</b>, we deliver ultra-fast speeds, rock-solid reliability, and enterprise-grade security. Whether you're a home user, a growing business, or a large-scale enterprise, we ensure you stay connected to what matters most—without limits.</p>
              <p><b>Experience the future of connectivity with Kloud. Together, we rise.</b></p>
            </div>
            <h5>Anamul Hoque</h5>
            <p>Chief Executive Officer</p>
          </div>
          <div class="">
            <div class="key_highlight_sec_img">
              <img src="{{asset('assets/include/img/welcome.jpg')}}" class="img-fluid" alt="img">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="service_section_body">
      <div class="container">
        <div class="row">
          <div class="service_head">
            <h5>Our Product & Services</h5>
          </div>
        </div>
        <div class="customer_section">
          <div class="key_highlight">
            <div class="">
              <div class="">
                <img src="{{asset('assets/images/uploads/services/1740167842_C59t64JD3c.jpg')}}" class="img-fluid" alt="img">
              </div>
            </div>
            <div class="">
              <div class="key_highlight_sec_text">
                <h1>High-Speed Broadband Internet</h1>
                <p>Reliable and scalable internet connectivity with speeds ranging from 100 Mbps to multiple Gbps for residential and business users.</p>
              </div>
              <a href="{{url('service/High-SpeedBroadbandInternet')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="customer_section">
          <div class="key_highlight">
            <div class="">
              <div class="key_highlight_sec_text">
                <h1>Infrastructure Solutions</h1>
                <p>Kloud Technologies provides enterprise-grade infrastructure solutions to support businesses with scalable and reliable IT environments. 1. Enterprise Server Solutions: High-performance servers desi...</p>
              </div>
              <a href="{{url('service/InfrastructureSolutions')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
            <div class="image-bottom">
              <div class="">
                <img src="{{asset('assets/images/uploads/services/1740548732_aadoEWX9wT.jpg')}}" class="img-fluid" alt="img">
              </div>
            </div>
          </div>
        </div>
        <div class="customer_section">
          <div class="key_highlight">
            <div class="">
              <div class="">
                <img src="{{asset('assets/images/uploads/services/1740549485_7uC4rHZWx4.jpg')}}" class="img-fluid" alt="img">
              </div>
            </div>
            <div class="">
              <div class="key_highlight_sec_text">
                <h1>Network Services</h1>
                <p>Kloud Technologies ensures seamless and secure connectivity with a wide range of networking services: 1. Network Design &amp; Architecture: Custom network solutions to ensure reliability and high perfo...</p>
              </div>
              <a href="{{url('service/NetworkServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
        <div class="customer_section">
          <div class="key_highlight">
            <div class="">
              <div class="key_highlight_sec_text">
                <h1>Managed IT Services</h1>
                <p>Kloud Technologies provides end-to-end managed IT services to enhance business efficiency and security. 1. IT Helpdesk Support: 24/7 assistance to resolve IT issues and ensure smooth operations....</p>
                </div>
              <a href="{{url('service/ManagedITServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
            <div class="image-bottom">
              <div class="">
                <img src="{{asset('assets/images/uploads/services/1740549663_ML12JyOAiT.jpg')}}" class="img-fluid" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="key_highlight_sec discover_solutions_sec">
      <div class="container">
        <div class="key_highlight">
          <div class="">
            <div class="key_highlight_sec_text">
              <h1>Discover solutions at Kloud</h1>
              <p>Solve your business problems with products and services from Equinix and our partners. Get started with reference designs that match your needs.</p>
            </div>
            <a href="{{url('contact')}}"><button class="btn readmore_btn">Contact Now <i class="fa-solid fa-arrow-right"></i></button></a>
          </div>
          <div class="">
            <div class="key_highlight_sec_img">
              <img src="{{asset('assets/include/img/Discover_solutions.jpg')}}" class="img-fluid" alt="img">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature_lists_sec">
      <div class="container">
        <div class="row">
          <div class="title_heading">
            <h5 class="text-center"> Key Benefits</h5>
          </div>
        </div>
        <div class="feature_lists">
          <div class="feature_lists_details">
              <i class="fa-solid fa-tower-cell feture_icon"></i>
              <h5>Enhanced Data Speed</h5>
              <p>Experience lightning-fast connectivity nationwide with our Enhanced Data Speed, ensuring seamless browsing, streaming, and downloads for all users.</p>
          </div>
          <div class="feature_lists_details">
            <i class="fa-solid fa-hand feture_icon"></i>
            <h5>Cost Savings</h5>
            <p>Reduce operational expenses with optimized bandwidth usage and infrastructure efficiency, delivering significant cost savings for your internet services.</p>
          </div>
          <div class="feature_lists_details">
            <i class="fa-solid fa-network-wired feture_icon"></i>
            <h5>Scalability</h5>
            <p>Effortlessly expand your network capabilities with our scalable infrastructure, designed to grow with your users and data demands.</p>
          </div>
        </div>
      </div>
    </section>

@endsection