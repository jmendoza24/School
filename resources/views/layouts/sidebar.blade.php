  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark bg-gradient-x-primary navbar-shadow morado " >
    <div class="navbar-wrapper morado">
      <div class="navbar-header morado">
        <ul class="nav navbar-nav flex-row ">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item ">
            <a class="navbar-brand" href="{{ route('home')}}">
              <img class="brand-logo" alt="admin logo"  src="{{ url('app-assets/images/logo/mati-kinder-logo-50x34.png') }}">
              <h2 class="brand-text">Admin</h2>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content morado">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left ">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right ">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="user-name">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>                
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                   </form>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="background-color: #FFD965" >
    <div class="main-menu-content" >
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="background-color: #FFD965">
        
       @include('layouts.menu')
      </ul>
    </div>
  </div>