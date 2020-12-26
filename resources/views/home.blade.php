@extends('layouts.app')

@section('content')

<!-- Start Banner -->
<section id="banner">
    <div class="slider">
      <div class="item"> <img src="{{asset('assets/img/banner1.jpg')}}" class="thumb" alt="">
        <div class="carousel-text d-flex align-items-center">
          <article class="container">
            {{-- <form method="get" action="{{route('results')}}"> --}}
            <form method="get" action="">
            <div class="row d-flex justify-content-center">
              <aside class="col-lg-8 col-md-10">
                <div class="BannerText">
                  <div class="input-group">
                    <input class="form-control" name="search" type="search" placeholder="Type Something here..">
                    <span class="input-group-append">
                      {{-- <button class="btn" type="submit"> <i class="fas fa-mouse-pointer"></i> </button> --}}
                      <button class="btn" type="button"> <i class="fas fa-mouse-pointer"></i> </button>
                    </span>
                  </div>
                </div>
              </aside>
            </div>
          </form>
          </article>
        </div>
      </div>
    </div>
  </section>
   <!--Start main Part-->
  <main class="main">
    <article class="container">
      <!--start Latest Section-->
      <section class="Latest mt60">
        <h2 class="sec-title text-uppercase"><span>Latest</span></h2>
        <!--Start Slider-->
        @if($latest->count() > 0)
        <div class="owl-one owl-content-carousel owl-carousel owl-theme">
          <!--start carousel item-->
              @foreach ($latest as $item)
                <div class="item">
                  <div class="SliderBox">
                    <div class="boximg"> <img src="{{!empty($item->main_image_url) ? $item->main_image_url : asset('assets/img/no_img.png')}}" alt="" class="w-100"> </div>
                    <div class="description">
                      {{-- <h3><a href="{!! route('result.get-details', $item->id) !!}">{!! $item->main_title !!}</a></h3> --}}
                      <h3><a href="javascript:void(0);">{!! $item->main_title !!}</a></h3>
                      <div class="d-flex align-items-center">
                        <div class="avtar"><img src="{{$item->content_user->user_image_url}}" class="rounded-circle"></div>
                      <div> <a href="#">{{$item->content_user->name}}</a>
                          <p>{{$item->content_category->name}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
          <!--End carousel item-->
        </div>
        @else
          <div class="col-md-12 col-sm-12 text-center">
            No records available
          </div>
        @endif
        <!--End Slider-->
        {{-- <div class="sepline d-flex align-items-center"> <span></span> <a href="{{ url('latest') }}" class="btn btn-primary rounded-30">VIEW ALL</a> </div> --}}
        <div class="sepline d-flex align-items-center"> <span></span> <a href="javascript:void(0);" class="btn btn-primary rounded-30">VIEW ALL</a> </div>
      </section>
      <!--End Latest Section-->

      <!--start Trending Section-->
      <section class="Trending mt60">
        <h2 class="sec-title text-uppercase"><span>Trending</span></h2>
        <!--Start Slider-->
        @if($trending->count() > 0)
        <div class="owl-one owl-carousel owl-content-carousel owl-theme">
          <!--start carousel item-->
              @foreach ($trending as $item)
                <div class="item">
                  <div class="SliderBox">
                    <div class="boximg"> <img src="{{!empty($item->main_image_url) ? $item->main_image_url : asset('assets/img/no_img.png')}}" alt="" class="w-100"> </div>
                    <div class="description">
                      <h3><a href="{!! route('result.get-details', $item->id) !!}">{!! $item->main_title !!}</a></h3>
                      {{-- <h3><a href="javascript:void(0);">{!! $item->main_title !!}</a></h3> --}}
                      <div class="d-flex align-items-center">
                        <div class="avtar"><img src="{{$item->content_user->user_image_url}}" class="rounded-circle"></div>
                        <div> <a href="#">{{$item->content_user->name}}</a>
                          <p>{{$item->content_category->name}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
          <!--End carousel item-->
        </div>
        @else
          <div class="col-md-12 col-sm-12 text-center">
            No records available
          </div>
        @endif
        <!--End Slider-->
        {{-- <div class="sepline d-flex align-items-center"> <span></span> <a href="{{ url('trending') }}" class="btn btn-secondary rounded-30">VIEW ALL</a> </div> --}}
        <div class="sepline d-flex align-items-center"> <span></span> <a href="javascript:void(0);" class="btn btn-secondary rounded-30">VIEW ALL</a> </div>

      </section>
      <!--End Trending Section-->

      <!--start Category Section-->
      <section class="Category mt60">
        <h2 class="sec-title text-uppercase"><span>Category</span></h2>
        <!--Start Slider-->
        @if($categories->count() > 0)
          <div class="owl-two owl-carousel owl-category-carousel owl-theme">
            @foreach ($categories as $item)
            <!--start carousel item-->
            <div class="item">
              <div class="CategoryBox"> <a href="#">
                <div class="boximg"> <img src="{{!empty($item->icon_url) ? $item->icon_url : asset('assets/img/no_img.png')}}" alt="" class="w-100"> </div>
                <div class="description">
                  <h3>{!! $item->name !!}</h3>
                </div>
                </a>
              </div>
            </div>
            <!--End carousel item-->
            @endforeach
          </div>
        @else
          <div class="col-md-12 col-sm-12 text-center">
            No records available
          </div>
        @endif
        <!--End Slider-->
        <div class="sepline d-flex align-items-center"> <span></span> <a href="#" class="btn btn-secondary rounded-30">VIEW ALL</a> </div>
      </section>
      <!--End Trending Section-->
    </article>
  </main>
  <!--End main Part-->
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
