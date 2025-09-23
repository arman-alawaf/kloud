@extends('layouts.app')

@section('content')
<style>
.input-group-text.toggle-password {
    background-color: #f8f9fa;
    border-left: none;
}

.input-group .form-control {
    border-right: none;
}

.input-group .form-control:focus {
    box-shadow: none;
}

.input-group .toggle-password i {
    font-size: 1.1rem;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span class="input-group-text toggle-password" id="togglePassword" style="cursor: pointer;">
                                        <i class="bi bi-eye-slash-fill" id="toggleIcon"></i>
                                    </span>
                                </div>
                                @error('password')<span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>

                        <!--<div class="row mb-3">-->
                        <!--    <div class="col-md-6 offset-md-4">-->
                        <!--        <div class="form-check">-->
                        <!--            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                        <!--            <label class="form-check-label" for="remember">-->
                        <!--                {{ __('Remember Me') }}-->
                        <!--            </label>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        icon.classList.toggle('bi-eye-fill');
        icon.classList.toggle('bi-eye-slash-fill');
    });
</script>
@endsection
