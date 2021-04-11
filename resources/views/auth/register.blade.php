@extends('layouts.app')
@section('content')
<!-- Main content -->
  {{-- <div class="main-content">

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
                    <input type="hidden" name="user_type" value="{{ $isCreator }}">
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
  </div> --}}

  <main class="main">
    <article class="container">
      <div class="row d-flex justify-content-center">
        <aside class="col-lg-5">
          <div class="login-box text-center m-0 mt-md-3">
            @php
                $isCreator = isset($isCreator) ? 1 : 0;
            @endphp

            <h3>{{$isCreator ? 'Creator' : 'User'}} Sign Up</h3>
            <div class="text-left">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              <div class="pb-3"></div>
              @if($isCreator)
                <p><strong>If you want to sign up as a User <a href="{{url('register')}}">Sign Up</a></strong></p>
              @else
                <p><strong>If you want to sign up as a Creator <a href="{{url('creator-register')}}">Sign Up</a></strong></p>
              @endif
              <hr>
            </div>

            @if(Session::has('alert-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-inner--text"><strong>Success!</strong> {{Session::get('alert-success')}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
            @endif

            {{-- <form action="#" method="get">
              <div class="form-group radioeffect magic-radio-group text-left"> <span>
                <input name="radiog_lite" id="radio1" class="css-checkbox radioshow magic-radio" type="radio" data-class="div1" checked="">
                <label for="radio1" class="css-label Individual">Individual</label>
                </span> <span>
                <input name="radiog_lite" id="radio2" class="css-checkbox radioshow magic-radio" type="radio" data-class="div2">
                <label for="radio2" class="css-label Company">Company</label>
                </span> </div>
              <div class="form-group">
                <input type="text" class="form-control" id="Name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="SurName" placeholder="Surname">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="Email" placeholder="Email or Phone Number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="chiller_cb mb-3">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1" class="control-label">Show Password</label>
                <span></span> </div>
              <div class="form-group login-btn">
                <button type="submit" class="btn btn-primary rounded-30 text-uppercase w-100">Continue</button>
              </div>
              <h5 class="text-light mt-4">Already have an account? <a href="#">Login</a></h5>
            </form> --}}

            <form role="form" method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf
                <input type="hidden" name="user_type" value="{{ $isCreator }}">

                @if($isCreator)
                  <div class="form-group radioeffect magic-radio-group text-left">
                      <span>
                          <input name="is_company" value="0" id="radio1" class="css-checkbox radioshow magic-radio" type="radio" data-class="div1" checked="">
                          <label for="radio1" class="css-label Individual">Individual</label>
                      </span>
                      <span>
                          <input name="is_company" value="1" id="radio2" class="css-checkbox radioshow magic-radio" type="radio" data-class="div2">
                          <label for="radio2" class="css-label Company">Company</label>
                      </span>
                  </div>
                @endif

                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} text-left">
                    <div class="input-group input-group-alternative">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" id="name" value="{{ old('name') }}" autofocus>
                    </div>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            {{ $errors->first('name') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} text-left">
                    <div class="input-group input-group-alternative">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('account_name') ? ' has-danger' : '' }} text-left">
                  <div class="input-group input-group-alternative">
                      <input class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Account Name') }}" type="text" name="account_name" id="account_name" value="{{ old('account_name') }}">
                    </div>
                    <small id="accNameHelp" class="form-text text-muted">Only 0-9a-zA-Z-_@ allowed</small>

                  {{-- <a href="javascript:void(0);" id="generateAccountName">Generate</a> --}}

                  <span class="invalid-feedback" style="{{ $errors->has('account_name') ? 'display: block;' : 'display: none;' }}" role="alert">
                      {{ $errors->first('account_name') }}
                  </span>
              </div>
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} text-left">
                    <div class="input-group input-group-alternative">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" id="password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                </div>

                <div class="chiller_cb mb-3">
                    <input id="show-password" type="checkbox">
                    <label for="show-password" class="control-label">Show Password</label>
                    <span></span>
                </div>

                 <div class="g-recaptcha" data-sitekey="6LeoP6MaAAAAAF8YZYET3TcBRt9fL_wO0zBcv_Vh"></div>

                  <div class="form-group login-btn">
                    <button type="submit" class="btn btn-primary rounded-30 text-uppercase w-100">Continue</button>
                  </div>
                <h5 class="text-light mt-4">Already have an account? <a href="{{url('home')}}">Login</a></h5>
            </form>

          </div>
        </aside>
      </div>
    </article>
  </main>
  <!--End main Part-->
@endsection

@section('pagewise_js')
<script type="text/javascript">

$(document).ready(function() {
    document.getElementById("registerForm").addEventListener("submit",function(evt)
    {
      var response = grecaptcha.getResponse();

      if(response.length == 0)
      {
        $('.notifyAlert').remove();
        //reCaptcha not verified
        $.notify({
          message: 'Please verify you are humann!'
        },{
          type: 'alert alert-danger notifyAlert'
        });

        evt.preventDefault();
        return false;
      }
      //captcha verified
    });

    $('#account_name').keypress(function( e ) {
      if(!/[0-9a-zA-Z-_@]/.test(String.fromCharCode(e.which)))
        return false;
    });

    // Generate Account Name

    $(document).on('blur','#account_name',function(event) {

        var account_name = $('#account_name').val();

        if(account_name != '')
        {
            $.ajax(
            {
                url: '{{route("user.validate-account-name")}}',
                type: "post",
                datatype: "json",
                data:{account_name:account_name},
            }).done(function(data){
              if(data.success)
              {
                $.notify({
                  message: 'Account name is not available'
                },{
                  type: 'alert alert-danger'
                });
              }
            });
        }
    });
});




</script>
@endsection
