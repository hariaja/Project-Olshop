<nav class="navbar navbar-static-top navbar-expand-lg">
  <!-- Sidebar toggle button -->
  <button id="sidebar-toggler" class="sidebar-toggle">
    <span class="sr-only">Toggle navigation</span>
  </button>
  <!-- search form -->
  <div class="search-form d-none d-lg-inline-block">
    
  </div>

  <div class="navbar-right ">
    <ul class="nav navbar-nav">
      
      <li class="right-sidebar-in right-sidebar-2-menu">
        <i class="mdi mdi-settings mdi-spin"></i>
      </li>
      <!-- User Account -->
      <li class="dropdown user-menu">
        <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
          <img src="{{ asset('assets/sleek/img/user/user.png') }}" class="user-image" alt="User Image" />
          <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
          <!-- User image -->
          <li class="dropdown-header">
            <img src="{{ asset('assets/sleek/img/user/user.png') }}" class="img-circle" alt="User Image" />
            <div class="d-inline-block">
              {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small>
            </div>
          </li>

          <li>
            <a href="user-profile.html"><i class="mdi mdi-account"></i>My Profile</a>
          </li>
          
          <li class="dropdown-footer">
            <a href="#"> <i class="mdi mdi-logout"></i>Log Out</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>