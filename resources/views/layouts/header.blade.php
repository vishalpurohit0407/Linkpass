{{-- <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item text-left text-white">
              Linkpasser
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-xl-auto">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img src="{{ isset(auth()->user()->id) ? auth()->user()->user_image_url : asset('assets/img/theme/defualt-user.png') }}" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 140px;">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm font-weight-bold">{{ isset(auth()->user()->id) ? auth()->user()->name : '' }}</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-button-power"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        </div>
      </div>
    </nav> --}}

<header id="header">

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

            @if(isset(auth()->user()->id) && auth()->user()->is_creator)
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
</header>