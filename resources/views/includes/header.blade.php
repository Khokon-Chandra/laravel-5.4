<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini" style="font-size: 80% !important;">Meghna Development Society</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Meghna Development Society</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('img/profile.png') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
                  

          <ul class="dropdown-menu" style="border: 1px solid #3c8dbc;">
            <!-- User image -->
            <li class="user-header">

              <img src="{{ asset('img/profile.png') }}" class="img-circle" alt="User Image">

              <p>
                {{ Auth::user()->name }} -
                @if(Auth::user()->user_role == 1) {{ 'Admin' }} @endif
                <small>Member since {{ substr(Auth::user()->created_at,0,10) }}</small>
              </p>
            </li>
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <!-- <div class="pull-left">
                <a href="#" class="btn btn-primary btn-flat">Profile</a>
              </div> -->
              <div class="pull-right">
                <a href="{{ '/logout' }}" class="btn btn-primary btn-flat">Logout</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>