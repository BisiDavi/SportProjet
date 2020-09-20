<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="{{ asset('assets/img/logo.jpg') }}" alt="De Skyballers Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">De Skyballers</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <p class="img-circle elevation-3 p-2 bg-danger text-white">AD</p>
      </div>
      <div class="info">
        <a href="#" class="d-block">Welcome {{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="/admin" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/post" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Post</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/post" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>View Posts</p>
          </a>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item disabled">
          <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
