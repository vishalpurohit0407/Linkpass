@extends('layouts.app')
@section('content')
<!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary mt-4 py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-3">
              <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                  <span class="Small-Title">Welcome to {{env('APP_NAME')}}</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 ">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card border-1 mb-0">

            <div class="card-body ">
                @if(Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-inner--text"><strong>Success!</strong> {{Session::get('alert-success')}}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                @endif
                @php
                    $isCreator = isset($isCreator) ? 1 : 0;
                @endphp

                <div class="text-center text-muted mb-4">
                    <span>{{ $isCreator ? __('Creator Sign Up') : __('Sign Up') }}</span>
                </div>
                <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                <input type="hidden" name="is_creator" value="{{ $isCreator }}">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" autofocus>
                        </div>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}">
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative">
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password">
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                    </div>
                </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="{{ route('password.request') }}" class=""><small>{{ __('Forgot Password?') }}</small></a>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('login') }}" class="">
                    <small>{{ __('Sign In') }}</small>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

