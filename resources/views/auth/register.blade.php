@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="mt-5">
                <div class="text-center">

                    <div class="text-center">
                       <img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;">
                       <h2 class="text-white">Registration Form</h2>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-lg-4 col-md-4 col-sm-12 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark" style="background-color: #063f48">
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
