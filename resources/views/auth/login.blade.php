@extends('layouts.auth')

@section('content')

        <div class="container-fluid p-0">
            <div class="row m-0">
              <div class="col-12 p-0">    
                <div class="login-card login-dark">
                  <div>
                    <div>
                        <a class="logo" href="{{url('/')}}">
                            <img class="img-fluid for-dark" style="height: 80px" src="{{asset('assets/images/site/logo.png')}}" alt="looginpage">
                            <img class="img-fluid for-light" style="height: 80px" src="{{asset('assets/images/site/logo.png')}}" alt="looginpage">
                        </a>
                    </div>
                    <div class="login-main"> 
                    <form class="afterSubmitForm theme-form" method="POST" action="{{ route('login') }}"> @csrf
                        <!-- <input type="hidden" name="_token" value="6Xjw2TmkKAvgW0qdI1OtBVMQcuLjPKyrS3MqoEuj" autocomplete="off">                        <h4 class="text-center">Nationwide ISP</h4> -->
                        <p class="text-center">Sign in to account </p>
                        <div class="form-group">
                            <label class="col-form-label" for="email">Email Address *</label>
                            <input class="form-control " type="email" id="email" placeholder="admin@gmail.com" name="email" value="" autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="pwd">Password*</label>
                            <div class="form-input position-relative">
                                <input class="form-control " type="password" name="password" id="pwd" placeholder="*********" required autocomplete="current-password">
                                <div class="show-hide"> <span class="show"></span></div>
                            </div>
                        </div>
                        <div class="form-group mb-0">

                            <!-- <div class="checkbox p-0">
                                <input id="remember" type="checkbox" name="remember" id="remember" >
                                <label class="text-muted" for="remember"> Remember Me </label>
                            </div>
                            <a class="link" href="{{url('reset')}}">
                                Reset Password?
                            </a> -->

                            <div class="text-end mt-3">
                                <button class="afterSubmitBtn btn btn-primary btn-block w-100" type="submit">Sign in </button>
                            </div>
                        </div>
                        <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{url('register')}}">Create Account</a></p>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection