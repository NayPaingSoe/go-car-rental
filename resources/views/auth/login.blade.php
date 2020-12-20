@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class=" mt-5" >
               <!--  <div class="card-header text-center"><img src="{{asset('frontendtemplate/images/go_logo.png')}}" height="50">{{ __('Login Form') }}</div> -->
               <div class="text-center">
               <img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;">
               <h2 class="text-white">Login Form</h2>
               </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-lg-6 col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 ml-5 pl-3">
                            <div class="col-lg-11 col-md-11 col-sm-12 text-center pl-5">
                                <button type="submit" class=" ml-5 px-5 btn btn-dark" style="background-color: #063f48">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('register'))
                                
                                    <a class="col-12 btn btn-link" style="color: #063f48" href="{{ route('register') }}">You haven't account. Please {{ __('Register') }} here</a>
                                
                                @endif

                               <!--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
