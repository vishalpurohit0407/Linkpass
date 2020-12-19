<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand main-logo" href="{{route('admin.dashboard')}}">
          <img src="{{asset('assets/img/logo.svg')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <!-- <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div> -->
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.user.*') ? 'active' : '' }}" href="#navbar-forms-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-user">
                <i class="fas fa-users text-green"></i>
                <span class="nav-link-text">Users</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.user.*') ? 'show' : '' }}" id="navbar-forms-user" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.user.list')}}" class="nav-link {{ Request::routeIs('admin.user.list') ? 'active' : '' }}">All Users</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.user.create')}}" class="nav-link {{ Request::routeIs('admin.user.create') ? 'active' : '' }}">Add New User</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.cms.page.*') ? 'active' : '' }}" href="{{route('admin.cms.page.list')}}">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">CMS Pages</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.content.*') ? 'active' : '' }}" href="#navbar-forms-content" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-content">
                <i class="ni ni-collection text-orange"></i>
                <span class="nav-link-text">Content</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.content.*') ? 'show' : '' }}" id="navbar-forms-content" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.content.list')}}" class="nav-link {{ Request::routeIs('admin.content.list') ? 'active' : '' }}">All Content</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.content.create')}}" class="nav-link {{ Request::routeIs('admin.content.create') ? 'active' : '' }}">Add New Content</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.category.*') ? 'active' : '' }}" href="{{route('admin.category.list')}}">
                <i class="ni ni-ungroup text-info"></i>
                <span class="nav-link-text">Categories</span>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.user.*') ? 'active' : '' }}" href="#navbar-forms-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-user">
                <i class="fas fa-users text-green"></i>
                <span class="nav-link-text">Users</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.user.*') ? 'show' : '' }}" id="navbar-forms-user" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.user.list')}}" class="nav-link {{ Request::routeIs('admin.user.list') ? 'active' : '' }}">All Users</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.user.create')}}" class="nav-link {{ Request::routeIs('admin.user.create') ? 'active' : '' }}">Add New User</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.content.*') ? 'active' : '' }}" href="#navbar-forms-content" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-content">
                <i class="ni ni-settings text-orange"></i>
                <span class="nav-link-text">Content</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.content.*') ? 'show' : '' }}" id="navbar-forms-content" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.content.list')}}" class="nav-link {{ Request::routeIs('admin.content.list') ? 'active' : '' }}">All Content</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.content.create')}}" class="nav-link {{ Request::routeIs('admin.content.create') ? 'active' : '' }}">Add New Content</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.maintenance.*') ? 'active' : '' }}" href="#navbar-forms-maintenance" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-maintenance">
                <i class="fas fa-toolbox text-red"></i>
                <span class="nav-link-text">Maintenance</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.maintenance.*') ? 'show' : '' }}" id="navbar-forms-maintenance" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.maintenance.list')}}" class="nav-link {{ Request::routeIs('admin.maintenance.list') ? 'active' : '' }}">All Maintenance Contents</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.maintenance.create')}}" class="nav-link {{ Request::routeIs('admin.maintenance.create') ? 'active' : '' }}">Add New Maintenance Content</a>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.warrantyextension.*') ? 'active' : '' }}" href="#navbar-forms-warrantyextension" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms-warrantyextension">
                <i class="ni ni-collection text-default"></i>
                <span class="nav-link-text">Warranty Extensions</span>
              </a>
              <div class="collapse {{ Request::routeIs('admin.warrantyextension.*') ? 'show' : '' }}" id="navbar-forms-warrantyextension" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('admin.warrantyextension.list')}}" class="nav-link {{ Request::routeIs('admin.warrantyextension.list') ? 'active' : '' }}">All Warranty Extensions</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.warrantyextension.listreqest')}}" class="nav-link {{ Request::routeIs('admin.warrantyextension.listreqest') ? 'active' : '' }}"> Warranty Extension Request</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('admin.flowchart.*') ? 'active' : '' }}" href="{{route('admin.flowchart.list')}}">
                <i class="fas fa-sitemap text-info"></i>
                <span class="nav-link-text">Flowchart</span>
              </a>
            </li> -->

          </ul>

        </div>
      </div>
    </div>
  </nav>