@extends('layouts.front')

@section('content')

<style>
  @media only screen and (max-width: 768px) {
    .package_lists {
     flex-direction: column;
    }
  }
</style>

<section>
  <div class="banner_text">
      <img src="{{asset('assets/include/img/slider/2.png')}}" class="img-fluid" alt="img">
      <div class="banner_text_details">
        <h5>Membership Plans</h5>
        <p>Kloud Technologies Limited provides Bangladesh with premium internet solutions for residential and commercial users."</p>
      </div>
  </div>
</section>
<section class="service_section_body">
  <div class="container-fluid">
      
      @if(count($ResidentialsPackages)>0)
      <div class="different_package_sec">
              
        <div class="row">
          <div class="service_head mb-5">
            <h5>Residentials Packages</h5>
          </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="row justify-content-center">
            @foreach($ResidentialsPackages as $ResidentialsPackage)
            <div class="col-md-4 mb-4">
              <div class="ht-plan mb-45">
                <div class="shape-holder">
                  <img src="{{asset('assets/include/img/shape/shape-9.png')}}" alt="shape">
                  <img class="icon" src="{{asset('assets/include/img/shape/icon-9.svg')}}" alt="icon">
                </div>
                <div class="ht-plan-inner">
                  <div class="ht-plan-header">
                    <h3 class="plan-title">{{$ResidentialsPackage->plan}}</h3>
                    <h2 class="plan-price">৳{{$ResidentialsPackage->price}}<span class="month d-none">/m</span></h2>
                    <p class="plan-desc">{{$ResidentialsPackage->name}}</p>
                    <div class="price-border"></div>
                  </div>
                  @if($ResidentialsPackage->feature)
                  <ul class="feature-list">
                      <li class="price-available"><span class="check-mark"><i class="bi bi-check-lg"></i></span>
                          {{$ResidentialsPackage->feature}}
                      </li>
                  </ul>
                  @endif
                  <div class="ht-plan-footer mt-55 text-center">
                    <a class="ht-btn" href="#" data-bs-toggle="modal" data-bs-target="#Residentials{{$ResidentialsPackage->id}}"><span>Purchase Now</span> <span><img src="{{asset('assets/include/img/shape/arrow-2.svg')}}" alt="arrow"></span></a>
                  </div>
                </div>
              </div>
            </div>
            
              <!-- Residentials{{$ResidentialsPackage->id}} -->
              <div class="modal fade" id="Residentials{{$ResidentialsPackage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header" style="background: linear-gradient(to right,#8F18FF,#1BBBFF);color:white;">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{$ResidentialsPackage->name}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('package/store')}}" method="post" enctype="multipart/form-data"> @csrf
                    <input type="hidden" name="package_id" value="{{$ResidentialsPackage->id}}" id="package_id">
                    <div class="modal-body">
                      <div class="row">
        
                          <div class="col-12 mb-3">
                              <label for="name">Name <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="name" id="name" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="email">Email <span class="text-danger fw-bold">*</span></label>
                              <input type="email" name="email" id="email" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="phone">Phone <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="phone" id="phone" required class="form-control my-2">
                          </div>
                          
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" style="border:none;" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary px-5">Submit Now</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            
            @endforeach
  
            </div>
        </div>
      </div>
      @endif
      @if(count($BusinessPackages)>0)
      <div class="different_package_sec">
          
        <div class="row">
          <div class="service_head mb-5">
            <h5>Business Packages</h5>
          </div>
        </div>
        
        <div class="row justify-content-center">
          @foreach($BusinessPackages as $BusinessPackage)  
          <div class="col-md-4 mb-4">
            <div class="ht-plan mb-45">
              <div class="shape-holder">
                <img src="{{asset('assets/include/img/shape/shape-9.png')}}" alt="shape">
                <img class="icon" src="{{asset('assets/include/img/shape/icon-9.svg')}}" alt="icon">
              </div>
              <div class="ht-plan-inner">
                <div class="ht-plan-header">
                  <h3 class="plan-title">{{$BusinessPackage->plan}}</h3>
                  <h2 class="plan-price">৳{{$BusinessPackage->price}}<span class="month d-none">/m</span></h2>
                  <p class="plan-desc">{{$BusinessPackage->name}}</p>
                  <div class="price-border"></div>
                </div>
                @if($BusinessPackage->feature)
                <ul class="feature-list">
                    <li class="price-available"><span class="check-mark"><i class="bi bi-check-lg"></i></span>
                        {{$BusinessPackage->feature}}
                    </li>
                </ul>
                @endif
                <div class="ht-plan-footer mt-55 text-center">
                  <a class="ht-btn" href="#" data-bs-toggle="modal" data-bs-target="#Business{{$BusinessPackage->id}}"><span>Purchase Now</span> <span><img src="{{asset('assets/include/img/shape/arrow-2.svg')}}" alt="arrow"></span></a>
                </div>
              </div>
            </div>
          </div>
            
              <!-- Business{{$BusinessPackage->id}} -->
              <div class="modal fade" id="Business{{$BusinessPackage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{$BusinessPackage->name}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('package/store')}}" method="post" enctype="multipart/form-data"> @csrf
                    <input type="hidden" name="package_id" value="{{$BusinessPackage->id}}" id="package_id">
                    <div class="modal-body">
                      <div class="row">
        
                          <div class="col-12 mb-3">
                              <label for="name">Name <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="name" id="name" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="email">Email <span class="text-danger fw-bold">*</span></label>
                              <input type="email" name="email" id="email" required class="form-control my-2">
                          </div>
                          <div class="col-12 mb-3">
                              <label for="phone">Phone <span class="text-danger fw-bold">*</span></label>
                              <input type="text" name="phone" id="phone" required class="form-control my-2">
                          </div>
                          
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary px-5">Submit Now</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            
          @endforeach
        </div>

      </div>
    @endif
  </div>
</section>
<section>
  <div class="container">
    <div class="key_highlight mission_section">
      <div class="">
        <div class="key_highlight_sec_img">
          <img src="{{asset('assets/include/img/Cost_Savings.jpg')}}" class="img-fluid" alt="img">
        </div>
      </div>
      <div class="">
        <div class="key_highlight_sec_text">
          <h1>Cost Savings</h1>
          <p><b>Reduced need for transit ISPs.</b></p>
          <p>Welcome to Kloud Technologies Limited, Bangladesh’s premier Internet Exchange (IX) and CDN platform. As a subsidiary of Kloud Technologies Limited, we are dedicated to revolutionizing the digital ecosystem with seamless connectivity, reliable performance, and robust infrastructure.</p>
        </div>
      </div>
    </div>
    <div class="key_highlight mission_section">
      <div class="">
        <div class="key_highlight_sec_text">
          <h1>Reduced Latency</h1>
          <p><b>Faster data transfers improve end-user experience.</b></p>
          <p>Welcome to Kloud Technologies Limited, Bangladesh’s premier Internet Exchange (IX) and CDN platform. As a subsidiary of Kloud Technologies Limited, we are dedicated to revolutionizing the digital ecosystem with seamless connectivity, reliable performance, and robust infrastructure.</p>
        </div>
      </div>
      <div class="">
        <div class="key_highlight_sec_img">
          <img src="{{asset('assets/include/img/Reduced.jpg')}}" class="img-fluid" alt="img">
        </div>
      </div>
    </div>
    <div class="key_highlight mission_section">
      <div class="">
        <div class="key_highlight_sec_img">
          <img src="{{asset('assets/include/img/Reliability.png')}}" class="img-fluid" alt="img">
        </div>
      </div>
      <div class="">
        <div class="key_highlight_sec_text">
          <h1>Reliability</h1>
          <p><b>Redundant infrastructure for high availability.</b></p>
          <p>Welcome to Kloud Technologies Limited, Bangladesh’s premier Internet Exchange (IX) and CDN platform. As a subsidiary of Kloud Technologies Limited, we are dedicated to revolutionizing the digital ecosystem with seamless connectivity, reliable performance, and robust infrastructure.</p>
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
        <a class="ht-btn" href="user/register.html"><span>Sign Up</span></a>
      </div>
    </div>
  </div>
</section>
<section class="feature_lists_sec">
  <div class="container">
    <div class="row">
      <div class="title_heading">
        <h5 class="text-center"> Billing Management</h5>
      </div>
    </div>
    <div class="feature_lists">
      <div class="feature_lists_details">
          <i class="fa-solid fa-tower-cell feture_icon"></i>
          <h5>Billing Integration</h5>
          <p>Manage invoices and payment records</p>
      </div>
      <div class="feature_lists_details">
        <i class="fa-solid fa-hand feture_icon"></i>
        <h5>Custom Billing Cycles</h5>
        <p>Aligned with member preferences.</p>
      </div>
    </div>
  </div>
</section>


@endsection