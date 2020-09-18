<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- include link page -->
  @include('partials.headerlinks')

  @yield('link')
</head>

<body>
  <!-- include the header -->
  @include('partials.header')



  @yield('content')

  <!-- include the footer -->
  @include('partials.footer')

  <a href="#" style="background-color: #7F2AA7;" class="back-to-top">
    <i class="icofont-simple-up"></i>
  </a>


  @include('partials.footerlinks')

  @yield('page_footer_link')

</body>

</html>
