    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>L</b>ST</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Lara</b>STORE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('template')}}/dist/img/yato.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('template')}}/dist/img/yato.jpg" class="img-circle" alt="User Image">
                    <p>
                    {{ Auth::user()->name}} - {{ Auth::user()->email}}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                    </form>
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

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('template')}}/dist/img/yato.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="/home"><i class="fa fa-home"></i> <span>Home</span></i></a></li>
            <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="/profile"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li class="{{ request()->is('documents') ? 'active' : '' }}"><a href="/documents"><i class="fa fa-book"></i> <span>Documents</span></a></li>
            @if(Auth::user()->level == 3)
              <li class="treeview {{ request()->is('/students') ? 'active' : '' }}">
                <a href="#">
                  <i class="fa fa-book"></i> <span>Mahasiswa</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview {{ request()->is('students/create') ? 'active' : '' }}"><a href="/students/create"><i class="fa fa-circle-o"></i>Tambah Data</a></li>
                </ul>
              </li>
            @elseif(Auth::user()->level == 2)
              <li class="{{ request()->is('dosen') ? 'active' : '' }}"><a href="/dosen"><i class="fa fa-book"></i> <span>Dosen</span></a></li>
            @elseif(Auth::user()->level == 1)
              <li class="treeview {{ request()->is('/students') ? 'active' : '' }}">
                <a href="#">
                  <i class="fa fa-book"></i> <span>Mahasiswa</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview {{ request()->is('students') ? 'active' : '' }}"><a href="/students"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>