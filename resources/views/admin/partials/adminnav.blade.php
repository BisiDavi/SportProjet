<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/admin" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3 w-100">
    <div class="input-group input-group-sm w-100">
      <input class="form-control form-control-navbar" type="search Post" placeholder="Search for post"
        aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link text-danger font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" role=" button">
        Logout
      </a>
    </li>
  </ul>
</nav>

<form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
  @csrf
</form>
<!-- /.navbar -->
