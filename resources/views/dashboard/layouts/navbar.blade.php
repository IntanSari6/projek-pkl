<div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
      </form>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="/dist/assets/img/{{ auth()->user()->image }}" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div></a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title"></div>
            <a href="/profile" class="dropdown-item has-icon">
              <i class="far fa-user"></i> Profile
            </a>
            <div class="dropdown-divider"></div>
            <form action="/logout" method="post">
              @csrf
            {{-- <a class="dropdown-item has-icon text-danger"> --}}
            <button type="submit" class="nav-link px-3 border-0"><i class="dropdown-item has-icon text-danger fas fa-sign-out-alt"> Logout</i></button>
            {{-- </a> --}}
            </form>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>