<a href="{{url('dashboard')}}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini">
    <img src="{{asset('images/logokabtangerang.png')}}" alt="SPD" />
  </span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">
    <img src="{{asset('images/logokabtangerang.png')}}" alt="SPD" />
    &nbsp;&nbsp;<b>SIMPEDU</b>
  </span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">2</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Anda memiliki 2 notifikasi</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i> 3 warga mendaftar hari ini
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i> 5 pengaduan belum diproses
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
          @if(Session::has('akses'))
            <span class="hidden-xs">{{ Session::get('namalogin') }}</span>
          @endif
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            <p>
              @if(Session::has('akses'))
                {{ Session::get('namalogin') }} -
                @if(Session::get('akses')=="kesehatan")
                  SKPD Kesehatan
                @elseif(Session::get('akses')=="pendidikan")
                  SKPD Pendidikan
                @elseif(Session::get('akses')=="administrator")
                  Administrator
                @endif
              @endif
              <small>Member since Nov. 2012</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="{{url('userskpdprofile')}}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
