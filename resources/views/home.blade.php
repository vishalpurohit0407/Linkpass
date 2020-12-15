@extends('layouts.app')

@section('content')

<!-- Start Banner -->
<section id="banner">
    <div class="slider">
      <div class="item"> <img src="{{asset('assets/images/banner1.jpg')}}" class="thumb" alt="">
        <div class="carousel-text d-flex align-items-center">
          <article class="container">
            <div class="row d-flex justify-content-center">
              <aside class="col-lg-8 col-md-10">
                <div class="BannerText">
                  <h2>Lorem ipsum dolor <strong>Aconsectetur adipiscing elit</strong></h2>
                  <a href="#" class="btn btn-primary rounded-30">More About</a>
                  <div class="input-group">
                    <input class="form-control" type="search" placeholder="Type Something here..">
                    <span class="input-group-append">
                    <button class="btn" type="button"> <i class="fas fa-mouse-pointer"></i> </button>
                    </span> </div>
                </div>
              </aside>
            </div>
          </article>
        </div>
      </div>
      <div class="item"> <img src="{{asset('assets/images/banner1.jpg')}}" class="thumb" alt="">
        <div class="carousel-text d-flex align-items-center">
          <article class="container">
            <div class="row d-flex justify-content-center">
              <aside class="col-lg-8 col-md-10">
                <div class="BannerText">
                  <h2>Lorem ipsum dolor <strong>Aconsectetur adipiscing elit</strong></h2>
                  <a href="#" class="btn btn-primary rounded-30">More About</a>
                  <div class="input-group">
                    <input class="form-control" type="search" placeholder="Type Something here..">
                    <span class="input-group-append">
                    <button class="btn" type="button"> <i class="fas fa-mouse-pointer"></i> </button>
                    </span> </div>
                </div>
              </aside>
            </div>
          </article>
        </div>
      </div>
      <div class="item"> <img src="{{asset('assets/images/banner1.jpg')}}" class="thumb" alt="">
        <div class="carousel-text d-flex align-items-center">
          <article class="container">
            <div class="row d-flex justify-content-center">
              <aside class="col-lg-8 col-md-10">
                <div class="BannerText">
                  <h2>Lorem ipsum dolor <strong>Aconsectetur adipiscing elit</strong></h2>
                  <a href="#" class="btn btn-primary rounded-30">More About</a>
                  <div class="input-group">
                    <input class="form-control" type="search" placeholder="Type Something here..">
                    <span class="input-group-append">
                    <button class="btn" type="button"> <i class="fas fa-mouse-pointer"></i> </button>
                    </span> </div>
                </div>
              </aside>
            </div>
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
        <div class="owl-one owl-carousel owl-theme">
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img001.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img002.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img003.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img004.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img002.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
        </div>
        <!--End Slider-->
        <div class="sepline d-flex align-items-center"> <span></span> <a href="#" class="btn btn-primary rounded-30">VIEW ALL</a> </div>
      </section>
      <!--End Latest Section-->

      <!--start Trending Section-->
      <section class="Trending mt60">
        <h2 class="sec-title text-uppercase"><span>Trending</span></h2>
        <!--Start Slider-->
        <div class="owl-one owl-carousel owl-theme">
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img005.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img006.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img007.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img008.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="SliderBox">
              <div class="boximg"> <img src="{{asset('assets/images/img002.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3><a href="#">Sed ut perspiciatis unde omnis iste natus error...</a></h3>
                <div class="d-flex align-items-center">
                  <div class="avtar"><img src="{{asset('assets/images/avtar.jpg')}}" class="rounded-circle"></div>
                  <div> <a href="#">Briana Couch</a>
                    <p>Category 01</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End carousel item-->
        </div>
        <!--End Slider-->
        <div class="sepline d-flex align-items-center"> <span></span> <a href="#" class="btn btn-secondary rounded-30">VIEW ALL</a> </div>
      </section>
      <!--End Trending Section-->

      <!--start Category Section-->
      <section class="Category mt60">
        <h2 class="sec-title text-uppercase"><span>Category</span></h2>
        <!--Start Slider-->
        <div class="owl-two owl-carousel owl-theme">
          <!--start carousel item-->
          <div class="item">
            <div class="CategoryBox"> <a href="#">
              <div class="boximg"> <img src="{{asset('assets/images/img009.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3>eiusmod tempor incididunt ut labore...</h3>
              </div>
              </a> </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="CategoryBox"> <a href="#">
              <div class="boximg"> <img src="{{asset('assets/images/img010.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3>eiusmod tempor incididunt ut labore...</h3>
              </div>
              </a> </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="CategoryBox"> <a href="#">
              <div class="boximg"> <img src="{{asset('assets/images/img011.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3>eiusmod tempor incididunt ut labore...</h3>
              </div>
              </a> </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="CategoryBox"> <a href="#">
              <div class="boximg"> <img src="{{asset('assets/images/img012.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3>eiusmod tempor incididunt ut labore...</h3>
              </div>
              </a> </div>
          </div>
          <!--End carousel item-->
          <!--start carousel item-->
          <div class="item">
            <div class="CategoryBox"> <a href="#">
              <div class="boximg"> <img src="{{asset('assets/images/img009.jpg')}}" alt="" class="w-100"> </div>
              <div class="description">
                <h3>eiusmod tempor incididunt ut labore...</h3>
              </div>
              </a> </div>
          </div>
          <!--End carousel item-->
        </div>
        <!--End Slider-->
        <div class="sepline d-flex align-items-center"> <span></span> <a href="#" class="btn btn-secondary rounded-30">VIEW ALL</a> </div>
      </section>
      <!--End Trending Section-->
    </article>
  </main>
  <!--End main Part-->

{{-- <header class="masthead" style="background-image:url('{{asset('assets/img/home-bg.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <form method="get" action="{{route('results')}}">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading" style="font-size: 24px;margin:100px;">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" name="search" placeholder="Search" type="text">
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</header>

<div class="article-list">
    <div class="container">
       <div class="intro">
          <h2 class="text-center">Latest</h2>
       </div>
       @if($latest->count() > 0)
       <div class="row articles">

          @foreach ($latest as $item)
            <div class="col-sm-6 col-md-3 item">
                <div class="item-wrap">
                    <a href="{!! route('result.get-details', $item->id) !!}">
                        <img width="225" height="150" src="{{!empty($item->main_image_url) ? $item->main_image_url : asset('assets/img/no_img.png')}}">
                    </a>
                    <h3 class="name">{!! $item->main_title !!}</h3>
                    <p class="description">{!! $item->description !!}</p>
                    <a class="action" href="{!! route('result.get-details', $item->id) !!}"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
          @endforeach

          <div class="col-md-12 col-sm-12 text-right view-all">
            <a href="{!! url('latest') !!}">View All</a>
          </div>
       </div>
       @else
       <div class="col-md-12 col-sm-12 text-center">
         No records available
       </div>
       @endif

    </div>
 </div>

 <div class="article-list">
    <div class="container">
       <div class="intro">
          <h2 class="text-center">Trending</h2>
       </div>
       @if($trending->count() > 0)
       <div class="row articles">

          @foreach ($trending as $item)
            <div class="col-sm-6 col-md-3 item">
                <div class="item-wrap">
                    <a href="{!! route('result.get-details', $item->id) !!}">
                        <img width="225" height="150" src="{{!empty($item->main_image_url) ? $item->main_image_url : asset('assets/img/no_img.png')}}">
                    </a>
                    <h3 class="name">{!! $item->main_title !!}</h3>
                    <p class="description">{!! $item->description !!}</p>
                    <a class="action" href="{!! route('result.get-details', $item->id) !!}"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
          @endforeach

          <div class="col-md-12 col-sm-12 text-right view-all">
            <a href="{!! url('trending') !!}">View All</a>
          </div>
       </div>
       @else
       <div class="col-md-12 col-sm-12 text-center">
         No records available
       </div>
       @endif

    </div>
 </div>

 <div class="article-list">
    <div class="container">
       <div class="intro">
          <h2 class="text-center">Categories</h2>
       </div>
       @if($trending->count() > 0)
       <div class="row articles">

          @foreach ($categories as $item)
            <div class="col-sm-6 col-md-3 item">
                <div class="item-wrap">
                    <a href="#">
                        <img width="225" height="150" src="{{!empty($item->icon_url) ? $item->icon_url : asset('assets/img/no_img.png')}}">
                    </a>
                    <h3 class="name">{!! $item->name !!}</h3>
                    <a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
          @endforeach

          <div class="col-md-12 col-sm-12 text-right view-all">
            <a href="#">View All</a>
          </div>
       </div>
       @else
       <div class="col-md-12 col-sm-12 text-center">
         No records available
       </div>
       @endif

    </div>
 </div>



<style>
    /* Search Box - Start */
    header.masthead {
        margin-bottom: 50px;
        background: no-repeat 50%;
        background-color: #6c757d;
        background-attachment: scroll;
        position: relative;
        background-size: cover;
        height: 350px;
    }
    header.masthead .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #212529;
        opacity: .5;
    }
     /* Search Box - End */

    /* Content List - Start */
    .article-list {
        color: #313437;
        background-color: #fff;
    }
    .article-list h2 {
        font-weight: bold;
        padding-top: 20px;
        color: inherit;
        text-decoration: underline;
    }
    .article-list .intro p {
        margin-bottom: 0;
    }
    .article-list p {
        color: #7d8285;
    }
    .article-list .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto;
    }
    .article-list .item {
        padding-top: 20px;
        min-height: 350px;
        text-align: center;
    }
    .article-list .item-wrap {
        border: 1px solid #17408B;
        padding: 15px;
        border-radius: 10px;
    }
    .article-list .articles {
        padding-bottom: 40px;
    }
    .article-list .item .name {
        font-weight: bold;
        font-size: 16px;
        margin-top: 20px;
        color: inherit;
    }
    .article-list .item .description {
        font-size: 14px;
        margin-top: 15px;
        margin-bottom: 0;
    }
    .article-list .item .action {
        font-size: 24px;
        width: 24px;
        margin: 22px auto 0;
        line-height: 1;
        display: block;
        color: #4f86c3;
        opacity: 0.85;
        transition: opacity 0.2s;
        text-decoration: none;
    }
    .article-list .view-all{
        text-decoration: underline;
        font-weight: bold;
    }
    /* Content List - End */
</style> --}}


@endsection
