<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin|@yield('title') </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('admin.links.headerlinks');
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('admin.adminnav')

    @include('admin.mainsidebar')

    @yield('content')
  </div>


  {{-- @include('admin.content') --}}

  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="/localhost:8000">De Skyballers</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <p class="text-primary">Harvoxx Hub</p>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  @include('admin.links.footerlinks');
</body>

</html>
