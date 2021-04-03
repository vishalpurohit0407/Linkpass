{{-- <header id="header">

  <!-- Start Site Header -->
  <section class="site-header">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <aside class="logo"> <a class="navbar-brand" href="{{url('')}}"><img src="{{asset('assets/img/logo.svg')}}" alt=""></a> </aside>
        <div class="menu">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="stellarnav">
            <ul class="main-menu">
              <li class="bg hover-bg active"><a href="{{url('')}}">Home</a></li>
              <li class="bg hover-bg"><a href="{{url('about-us')}}">About</a></li>
              <li class="bg hover-bg"><a href="{{route('categories')}}" class="down">Category</a>
                <ul>

                  @if(isset($menuCategories) && $menuCategories->count() > 0)
                    @foreach ($menuCategories as $item)
                      <li><a href="{{route('categories.get-items', $item->hashid)}}">{{$item->name}}</a></li>
                    @endforeach
                  @endif
                </ul>
              </li>
              <li class="bg hover-bg"><a href="#">F&amp;Q</a></li>
              <li class="bg hover-bg"><a href="{{url('contact')}}">Contact US</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <div class="btn-menu">
          <ul>

            @if(isset(auth()->user()->id))
              <li>
                <a href="{{route('profile.edit')}}">My Profile</a>
              </li>
            @else
              <li>
                <a href="{{url('register')}}">Sign Up</a>
                <a href="{{url('creator-register')}}">Creator Sign Up <i class="fas fa-user"></i></a>
              </li>
            @endif

            @if(isset(auth()->user()->id) && auth()->user()->user_type)
            <li>
                <a href="{{route('user.content.list')}}">My Contents</a>
            </li>
            @endif

            @if(isset(auth()->user()->id))
              <li>
                  <a href="{{route('logout')}}">Logout</a>
              </li>
            @else
              <li>
                  <a href="{{url('login')}}">Login</a>
                  <a href="{{url('creator-login')}}">Creator Login <i class="fas fa-user"></i></a>
              </li>
            @endif

          </ul>
        </div>
      </div>
    </div>
  </section>
</header> --}}

<!--Start Header-->
<header id="header">

  <!-- Start Site Header -->
  <section class="site-header">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <aside class="logo"> <a class="navbar-brand" href="{{url('home')}}"><img src="{{ asset('assets/img/logo.svg') }}" alt=""></a> </aside>
        <div class="header-center">
          <!-- Actual search box -->
          {{-- <form method="GET" action="{{route('results')}}"> --}}
            <form method="GET" action="#">
            <div class="has-search"> <span class="fa fa-search form-control-feedback"></span>
              <input name="search" type="text" class="form-control" placeholder="Search">
            </div>
          </form>
        </div>
        <div class="btn-menu">
          <ul>
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-ellipsis-v"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                @if(isset(Auth::user()->id))
                  <li class="nav-item"> <a class="nav-link" href="{{url('profile')}}"> <span class="font-16"><i class="fal fa-cog"></i> Setting</span></a> </li>
                @endif
                <li class="nav-item"> <a class="nav-link" id="ShowFooter" href="javascript:void(0);"> <span class="font-16"><i class="fal fa-square"></i> Footer</span></a> </li>
                @if(isset(Auth::user()->id))
                  <li class="nav-item"> <a class="nav-link" id="" href="javascript:void(0);"> <span class="font-16"><i class="fal fa-align-justify"></i> Trending</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" id="" href="javascript:void(0);"> <span class="font-16"><i class="fal fa-align-justify"></i> Latest</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('logout')}}">  <span class="font-16"><i class="fal fa-sign-out"></i> Logout</span></a> </li>
                @endif
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</header>

@if(isset(Auth::user()->id))
  <div class="header-sec-top">
    <div class="container">
      <div class="header-sec-top-part">
        <p class="head-time user-interest-head-time">{{ date('Y/m/d h:i A', strtotime(Auth::user()->interest_last_updated_at))}}</p>
        <h4 class="m-0 user-interest-head-title">{{Auth::user()->interest_title}}</h4>
      </div>
      <div class="header-sec-link btn-receita" id="btn-receitamob" data-clicked-times="0"> <span class="custom-scroll-link"><i class="fal fa-chevron-double-down" id="seta"></i></span> </div>
      <div id="receita-div" style="display: none; height: 250px; border: 1px solid #ccc; border-top: 0;" class="{{Route::currentRouteName() != 'profile.edit' ? 'receita-hidden' : 'user-ineresest-wrap'}}">

          @if(Route::currentRouteName() == 'profile.edit')

            <form role="form" method="POST" action="" class="">
                @csrf

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group{{ $errors->has('interest_title') ? ' has-danger' : '' }} text-left">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" placeholder="{{ __('Interest Title') }}" type="text" name="interest_title" id="interest_title" value="{{ Auth::user()->interest_title }}">
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('interest_description') ? ' has-danger' : '' }} text-left">
                        <div class="input-group input-group-alternative">
                            <textarea class="form-control" placeholder="{{ __('Interest Description') }}" name="interest_description" id="interest_description" >{{ Auth::user()->interest_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group login-btn">
                      <button type="button" class="btn btn-primary rounded-30 text-uppercase w-100 save-user-interest">Save</button>
                    </div>
                  </div>
                </div>

            </form>
          @else
            <div class="row">
              <div class="col-md-12 user-ineresest-head-dec-wrap">
                {{ Auth::user()->interest_description }}
              </div>
            </div>
          @endif

      </div>
    </div>
  </div>
@endif