<header id="headerr" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container">
        <div class="d-flex justify-between align-items-center">
            <div class="logo">
                <h1><a href=""><span>LabKom</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav id="navbarr" class="navbar">
                <ul>
                    <li><a class="nav-link scrolled {{ Request::is('#') ? 'active' : '' }}" href="#">Beranda</a></li>
                    <li><a class="nav-link scrolled {{ Request::is('#Jadwal') ? 'active' : '' }}" href="#Jadwal">Jadwal Peminjaman Lab</a></li>
                    <li><a class="nav-link {{ Request::is('/login') ? 'active' : '' }}" href="/login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </div>
  </header>