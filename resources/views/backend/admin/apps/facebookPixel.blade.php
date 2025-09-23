@extends('layouts.back')

@section('content')

<section style="min-height:100vh;" class="mt-5 pt-5">
  <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-md-8">
              <form action="{{url('facebook-pixel-update')}}" method="post" class="card p-5"> @csrf @method('put')
                  <div class="row justify-content-center">
        
                      <div class="col-md-12 mb-3">
                          <label for="facebook_pixel">Facebook Pixel <span class="text-danger fw-bold"></span></label>
                          <textarea rows="10" cols="33" name="facebook_pixel" id="facebook_pixel" class="form-control my-2">{{$app->facebook_pixel}}</textarea>
                      </div>
                      <div class="col-md-12 text-center">
                          <button type="submit" class="btn btn-success px-5">Save Changes</button>
                      </div>
                      
                  </div>
              </form>
          </div>
      </div>

  </div>
</section>

@endsection