@extends('layouts.app')

@section('content')
<div class="container">

    <nav class="bg-white shadow-sm fixed-top">
        
        <div class="d-flex justify-content-around align-items-center">
            @guest
                @if (Route::has('register'))
                    <div class="py-2" style="border-bottom: 3px solid lightpink; width: 50%;">
                        <a class="nav-link teks-check-box text-center" style="color: rgb(45,165,163);font-size: 10pt;" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif
                    <div class="py-2" style="width: 50%;">
                        <a class="nav-link teks-check-box text-center" style="color: rgb(45,165,163);font-size: 10pt;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
            @endguest
        </div>

    </nav>


    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="">
                <div class="sub-title-form">{{ __('We will need..') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                
                                <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
                                
                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="name" type="text" placeholder="Your name" class="input-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <i class="fas fa-signature icon-input" id="icon-email-logIn"></i>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label> -->

                            <div class="col-md-6">

                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="username" type="text" placeholder="Your Username" class="input-form @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    <i class="fas fa-user icon-input" id="icon-email-logIn"></i>
                                </div>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-6">

                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="email" type="email" placeholder="Your email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <i class="far fa-envelope icon-input" id="icon-email-logIn"></i>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-6">

                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="password" type="password" placeholder="Your password" class="input-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <i class="fas fa-lock icon-input" id="icon-email-logIn"></i>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-6">

                                <div class="w-form-both" id="border-bottom-email-logIn">
                                    <input id="password-confirm" type="password" placeholder="Confirm your password" class="input-form" name="password_confirmation" required autocomplete="new-password">
                                    <i class="fas fa-unlock  icon-input" id="icon-email-logIn"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="input-submit f-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
