<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
          <img src="{{ asset('dist/img/dar-logo.png')}}" class="img-circle elevation-2" style="width: 100px; height: 100px;" alt="User Image">
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
        <div class="image">
            <img src="{{ asset('dist/img/admin.png')}}" class="img-circle elevation-2" style="width: 50px;" alt="User Image">
        </div>
        <div class="admin d-flex align-items-center p-2">
            <span class="text-white fw-bold">ADMINISTRATOR</span>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('landholding') }}" class="nav-link {{ Request::is('landholding') ? 'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                LAND TENURE SERVICES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('officers') }}" class="nav-link {{ Request::is('officers') ? 'active':''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                DAR OFFICERS
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->