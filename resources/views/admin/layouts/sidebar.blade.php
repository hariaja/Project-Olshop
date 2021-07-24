<div id="sidebar" class="sidebar sidebar-with-footer">
  <!-- Aplication Brand -->
  <div class="app-brand">
    <a href="{{ url('admin/dashboard') }}" title="Sleek Dashboard">
      <svg class="brand-icon"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid"
        width="30"
        height="33"
        viewBox="0 0 30 33">
        <g fill="none" fill-rule="evenodd">
          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
        </g>
      </svg>

      <span class="brand-name text-truncate">Sleek Dashboard</span>
    </a>
  </div>

  <!-- begin sidebar scrollbar -->
  <div class="" data-simplebar style="height: 100%;">
    <!-- sidebar menu -->
    <ul class="nav sidebar-inner" id="sidebar-menu">
      <li class="has-sub {{ ($currentAdminMenu == 'dashboard') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-view-dashboard-outline"></i>
          <span class="nav-text">Dashboard</span>
        </a>
      </li>

      <li  class="has-sub  {{ ($currentAdminMenu == 'catalog') ? 'expand active' : '' }}" >
        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
          aria-expanded="false" aria-controls="dashboard">
          <i class="mdi mdi-pencil-box-multiple"></i>
          <span class="nav-text">Catalog</span> <b class="caret"></b>
        </a>
        <ul  class="collapse  {{ ($currentAdminMenu == 'catalog') ? 'show' : '' }}"  id="dashboard"
          data-parent="#sidebar-menu">
          <div class="sub-menu">
            <li  class="{{ ($currentAdminSubMenu == 'product') ? 'active' : '' }}">
              <a class="sidenav-item-link" href="{{ url('admin/products')}}">
              <span class="nav-text">Products</span>
              </a>
            </li>
            <li class="{{ ($currentAdminSubMenu == 'category') ? 'active' : '' }}">
              <a class="sidenav-item-link" href="{{ url('admin/categories')}}">
              <span class="nav-text">Categories</span>
              </a>
            </li>
            <li class="{{ ($currentAdminSubMenu == 'attribute') ? 'active' : '' }}">
              <a class="sidenav-item-link" href="{{ url('admin/attributes') }}">
              <span class="nav-text">Attributes</span>
              </a>
            </li>
          </div>
        </ul>
      </li>

      <li  class="has-sub {{ ($currentAdminMenu == 'role-user') ? 'expand active' : ''}}">
        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
          aria-expanded="false" aria-controls="dashboard">
          <i class="mdi mdi-account-multiple-outline"></i>
          <span class="nav-text">Users &amp; Roles</span> <b class="caret"></b>
        </a>
        <ul class="collapse {{ ($currentAdminMenu == 'role-user') ? 'show' : ''}}"  id="auth"
          data-parent="#sidebar-menu">
          <div class="sub-menu">
            <li  class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}" >
              <a class="sidenav-item-link" href="{{ url('admin/users')}}">
              <span class="nav-text">Users</span>
              </a>
            </li>
            <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}">
              <a class="sidenav-item-link" href="{{ url('admin/roles')}}">
              <span class="nav-text">Roles</span>
              </a>
            </li>
          </div>
        </ul>
      </li>
      
    </ul>
  </div>

  <div class="sidebar-footer">
    <hr class="separator mb-0" />
    <div class="sidebar-footer-content">
      <a href="{{ url('logout') }}" class="sidenav-item-link text-white-50">
        <h6 class="text-uppercase">
          <i class="mdi mdi-logout"></i>
          Logout
        </h6>
      </a>
    </div>
  </div>
</div>