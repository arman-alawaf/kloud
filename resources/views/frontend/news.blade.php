@extends('layouts.front')

@section('content')

<!-- AutoLoadAutoCloseModal -->
<div class="modal fade" id="AutoLoadAutoCloseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: linear-gradient(to right,#8F18FF,#1BBBFF);color:white;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="row">
              <div class="col-12">
                  <img class="img-fluid" style="border-radius: 0px 0px 8px 8px;" src="{{asset('assets/images/notice1.jpeg')}}" alt="image">
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $('#AutoLoadAutoCloseModal').modal('show');
//   setTimeout(function() {
//     $('#AutoLoadAutoCloseModal').modal('hide');
//   }, 3000);
});
</script>

<section>
  <div class="banner_text">
      <img src="{{asset('assets/include/img/slider/6.png')}}?version={{ time() }}" class="img-fluid" alt="img">
      <div class="banner_text_details">
        <h5>News & Media</h5>
        <p>Kloud Technologies Limited provides Bangladesh with premium internet solutions for residential and commercial users."</p>
      </div>
  </div>
</section>

<section>
  <div class="container py-5">
      <div class="row">
          @foreach($news as $data)
          <div class="col-md-4">
            <a href="#">
              <div
                style="
                  width:100%;
                  height:250px;
                  background-image:url({{asset('images/news/'.$data->image)}});
                  background-position:center;
                  background-repeat:norepeat;
                  background-size:cover;
                "
                ></div>
              <h3 class="text-center my-2">{{$data->title}}</h3>
            </a>
          </div>
          @endforeach
      </div>
  </div>
</section>


@endsection