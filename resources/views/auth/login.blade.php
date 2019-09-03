@extends('layouts.app')



@section('content')

    <nav class="bg-white shadow-sm fixed-top">
    
        <div class="d-flex justify-content-around align-items-center">
            @guest
                @if (Route::has('register'))
                    <div class="py-2" style="width: 50%;">
                        <a class="nav-link teks-check-box text-center" style="color: rgb(45,165,163);font-size: 10pt;" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
                    <div class="py-2" style="border-bottom: 3px solid lightpink; width: 50%;">
                        <a class="nav-link teks-check-box text-center" style="color: rgb(45,165,163);font-size: 10pt;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
            @endguest
        </div>
    
    </nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="" style="width: 100%;">
                <div class="sub-title-form">{{ __('We will need..') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="email" type="email" placeholder="Your email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <i class="far fa-user icon-input" id="icon-email-logIn"></i>
                                <div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">

                            <div class="col-md-6">
                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
                                
                                <div class="w-form-both" id="border-bottom-password-logIn">
                                    <input id="password" type="password" placeholder="Your password" class="input-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <i class="fas fa-unlock-alt icon-input" id="icon-password-logIn"></i>
                                </div>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pl-0">
                            <div class="col-md-6 offset-md-4 pl-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>                                    

                                    <label class="form-check-label teks-check-box" style="color: rgb(45,165,163);" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="input-submit f-right">
                                    {{ __('Login') }}
                                </button>
                                <div style="clear:both;"></div>

                                
                                    <div class="mt-3">
                                        @if (Route::has('password.request'))
                                            <div class="">
                                                <a class="btn btn-link teks-check-box" style="color: rgb(45,165,163); font-size: 10pt;" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
