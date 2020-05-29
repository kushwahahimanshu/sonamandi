
<header class="main-header">
  

  <!-- Logo -->
  <a href="{{ url('dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">Sonamandi.com</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a>
            <span>Hi! {{ Auth::user()->name }}</span>
          </a>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="{{ route('logout') }}">Logout <i class="fa fa-sign-out"></i></a>
        </li>
      </ul>
    </div>
  </nav>

</header>
