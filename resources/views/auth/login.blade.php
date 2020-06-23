@extends('front.layout')

@section('main')
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>{{ __('Login') }}</h2>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="group-input">
                                <label for="username">{{ __('E-Mail Address') }}</label>
                                <input id="email" id="username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

                            <div class="group-input">
                                <label for="pass">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                             </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                       {{ __('Remember Me') }}
                                        <input type="checkbox" id="save-pass" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    @if (Route::has('password.request'))
                                    <a href="#" class="forget-pass">{{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">{{ __('Login') }}</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ url('/register') }}" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
