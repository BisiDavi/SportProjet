<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | @yield('title') </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('link')
  @include('admin.partials.headerlinks')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @include('admin.partials.adminnav')

    @include('admin.partials.mainsidebar')

    @guest
      @include('auth.login')
    @endguest

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

  @include('admin.partials.footerlinks')
</body>

</html>
