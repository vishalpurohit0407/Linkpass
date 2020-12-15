{{-- <footer class="footer">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center text-lg-left text-muted">
           &copy; {{ now()->year }} <a class="font-weight-bold ml-1" target="_blank">{{env('APP_NAME')}}</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          @php
          $cms_page = \App\CmsPage::where('status','1')->get();
          @endphp
          @if($cms_page)
            @foreach($cms_page as $page)
              <li class="nav-item">
                <a href="{{asset($page->url_slug)}}" target="_blank" class="nav-link">{{$page->title}}</a>
              </li>
            @endforeach
          @endif
        </ul>
      </div>
    </div>
  </div>
</footer> --}}

<!--Start footer-->
<footer class="footer">
  <article class="container">
    <div class="row d-flex align-items-center">
      <aside class="col-sm-2"> <a href="{{url('')}}"><img src="{{asset('assets/images/logo.svg')}}" alt="" class="footer-logo"></a> </aside>
      <aside class="col-sm-10">
        <ul class="footer-mennu">
          @php
          $cms_page = \App\CmsPage::where('status','1')->get();
          @endphp
          @if($cms_page->count() > 0)
            @foreach($cms_page as $page)
              <li class="nav-item">
                <a href="{{asset($page->url_slug)}}" target="_blank">{{$page->title}}</a>
              </li>
            @endforeach
          @endif
        </ul>
      </aside>
    </div>
    <ul class="FooterSocial">
      <span>Follow us on</span>
      <li><a href="#"><img src="{{asset('assets/images/fb.png')}}" alt=""></a></li>
      <li><a href="#"><img src="{{asset('assets/images/tw.png')}}" alt=""></a></li>
      <li><a href="#"><img src="{{asset('assets/images/yt.png')}}" alt=""></a></li>
    </ul>
  </article>
  <!--Start Footer copyright Section-->
  <section class="copy">
    <article class="container"> &copy; {{date('Y')}}. All Rights Reserved. Linkpasser. </article>
  </section>
  <!--End Footer copyright Section-->
</footer>
<!--End footer-->