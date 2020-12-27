@extends('layouts.app')

@section('content')

<main class="main">

  <div class="header bg-gradient-primary pt-lg-3">
    <div class="container">
      <div class="header-body text-center ">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <span class="Small-Title">Categories</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-lg-3">
    <!--start Category Section-->

    <div class="row align-items-center mb20">
      <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark pl-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">Categories</li>
              </ol>
          </nav>
      </div>
    </div>

    <div class="row">
      <!--Start Slider-->
      @if($categories->count() > 0)
          @foreach ($categories as $item)
            <div class="col-md-3">
              <div class="item">
                <div class="CategoryBox"> <a href="{{route('categories.get-items', $item->hashid)}}">
                  <div class="boximg"> <img src="{{!empty($item->icon_url) ? $item->icon_url : asset('assets/img/no_img.png')}}" alt="" class="w-100"> </div>
                  <div class="description">
                    <h3>{!! $item->name !!}</h3>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
      @else
        <div class="col-md-12 col-sm-12 text-center">
          No records available
        </div>
      @endif
      <!--End Slider-->
    </div>
  </div>
  <!--End main Part-->
</main>
@endsection

@section('pagewise_js')
<script type="text/javascript">
$(document).ready(function() {

    var alertMsg = "{!! Session::has('alert-danger') ? Session::get('alert-danger') : '' !!}";

    if(alertMsg != '')
    {
      swal('Error!', alertMsg, 'error');
      return false;
    }
});
</script>
@endsection
