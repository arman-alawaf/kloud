@extends('layouts.front')

@section('content')

<section>
  <div class="banner_text">
      <img src="{{asset('assets/include/img/slider/3.png')}}" class="img-fluid" alt="img">
      <div class="banner_text_details">
        <h5>Services</h5>
        <p>Kloud Technologies Limited provides Bangladesh with premium internet solutions for residential and commercial users."</p>
      </div>
  </div>
</section>

<section class="our_journey">
  <div class="container">
    <div class="row">
      <div class="title_heading ">
        <h5> Our Journey</h5>
      </div>
      <div>
        <p>Kloud is dedicated to helping businesses navigate the complexities of cloud technology and network management. With our innovative solutions and commitment to excellence, we empower our clients to achieve their goals and drive growth in a digital-first world.</p>
        <p>Contact us today to learn more about how Kloud can support your business!</p>
      </div>
      <div class="title_heading ">
        <h5> Why Choose Kloud? </h5>
      </div>
      <div>
        <p><b>Expertise:</b> With years of experience in the industry, we have the knowledge and skills to deliver effective solutions tailored to your specific needs.</p>
        <p><b>Customization:</b> We understand that every business is unique, and we offer customized solutions that align with your goals and objectives.</p>
        <p><b>Reliability:</b> Our solutions are designed to be robust and secure, ensuring that your business can operate smoothly and efficiently.</p>
        <p><b>Customer Support:</b> We pride ourselves on our exceptional customer service, providing ongoing support and guidance to our clients.</p>
      </div>
    </div>
  </div>
</section>

<section class="service_section_body">
  <div class="container-fluid">
    <div class="custome_service_section">
                        <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740167842_C59t64JD3c.jpg')}}" alt="icon">
            <h6>High-Speed Broadband Internet</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/High-SpeedBroadbandInternet')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740548732_aadoEWX9wT.jpg')}}" alt="icon">
            <h6>Infrastructure Solutions</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/InfrastructureSolutions')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740549485_7uC4rHZWx4.jpg')}}" alt="icon">
            <h6>Network Services</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/NetworkServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740549663_ML12JyOAiT.jpg')}}" alt="icon">
            <h6>Managed IT Services</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/ManagedITServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740550079_YWyEoXNZcm.jpg')}}" alt="icon">
            <h6>Security Solutions</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/SecuritySolutions')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740550328_n5bnd4799O.jpg')}}" alt="icon">
            <h6>Enterprise Solutions</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/EnterpriseSolutions')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1741029252_S2ih60RSHO.png')}}" alt="icon">
            <h6>Cloud Services</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/CloudServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740551289_sMClaMUWfg.jpg')}}" alt="icon">
            <h6>Software Solutions</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/SoftwareSolutions')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740551539_SsvwfH6cT6.jpg')}}" alt="icon">
            <h6>Consumer Electronics &amp; Smart Devices</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/ConsumerElectronics&SmartDevices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  <div class="service_page_details">
            <img class="icon" src="{{asset('assets/images/uploads/services/1740551658_jZkM0cZnJe.jpg')}}" alt="icon">
            <h6>Professional Services</h6>
            <p>...</p>
            <div class="customer_section_details_more">
              <a href="{{url('service/ProfessionalServices')}}"><button class="btn readmore_btn">Read More <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
          </div>
                  </div>
  </div>
</section>

<section>
  <div class="package_detail">
    <div class="package_detail_text">
      <h5>Want to collaborate? Here's how we work.</h5>
      <p>If you have questions, feel free to contact our expert for assistance.</p>
    </div>
    <div>
      <div class="ht-plan-footer mt-55 text-center">
        <a class="ht-btn" href="#"><span>Contact Us</span></a>
      </div>
    </div>
  </div>
</section>

@endsection