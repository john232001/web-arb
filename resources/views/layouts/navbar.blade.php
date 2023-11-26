<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
            <span> {{ Auth::user()->username}}  </span>
            <i class="fas fa-angle-down"> </i>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
          <a href="{{ route('logout') }}" class="dropdown-item dropdown-header">
            <button type="submit" class="btn btn-success">Logout</button>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->