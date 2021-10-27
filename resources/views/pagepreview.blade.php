@extends('layouts.app', ['title' => __('User Profile')])

@section('content')

<main class="main">
    <article class="container">
        <hr class="mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <aside class="col-lg-12">
                    <div class="border-0">
                        <div class="row align-items-center ">
                            <h4 class="mb-4 ml-3">{{ $page ? $page->title : ''}}</h4>
                        </div>
                    </div>
                    <div class="pt-0">
                        <form method="post" action="{{ route('user.send-enquiry') }}" autocomplete="off" enctype= "multipart/form-data">
                            @csrf

                            <div class="pl-lg-4">

                                @if(isset($page->id) && $page->url_slug == 'contact')

                                  <div class="form-group">
                                      {{-- <label class="form-control-label" for="input-name">{{ __('Name') }}</label> --}}
                                      <div class="{{ $errors->has('subject') ? ' has-danger' : '' }}">
                                          <input type="text" name="subject" id="input-name" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="{{ __('Subject') }}" value="{{ old('subject') }}" maxlength="18" autofocus required>

                                          @if($errors->has('subject'))
                                              <span class="invalid-feedback" role="alert">
                                                  {{ $errors->first('subject') }}
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      {{-- <label class="form-control-label" for="message">{{ __('message') }}</label> --}}
                                      <div class="{{ $errors->has('message') ? ' has-danger' : '' }}">
                                          <textarea rows="5" type="message" name="message" id="message" class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="{{ __('Message') }}" maxlength="500" value="{{ old('message') }}" required></textarea>

                                          @if ($errors->has('message'))
                                              <span class="invalid-feedback" role="alert">
                                                  {{ $errors->first('message') }}
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group mt-3">
                                      <button type="submit" class="btn btn-primary rounded-30 text-uppercase float-left w-50">Send</button>
                                      <a href="{{route('profile.edit')}}" class="btn btn-default rounded-30 text-uppercase float-left ml-2 w-45">{{ __('Cancel') }}</a>
                                  </div>

                                @else
                                  {!! $page ? $page->content : '' !!}
                                @endif

                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </article>
</main>
<!--End main Part-->
@endsection

@section('pagewise_js')
<script type="text/javascript">

</script>
@endsection