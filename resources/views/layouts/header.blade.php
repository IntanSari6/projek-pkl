<header id="headerr" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container">
        <div class="d-flex justify-between align-items-center">
            <div class="logo">
                <h1><a href="/"><span>LabKom</span></a></h1>
            </div>
            <nav id="navbarr" class="navbar">
                <ul>
                    <li><a class="nav-link scrolled {{ Request::is('#') ? 'active' : '' }}" href="{{ route ('beranda') }}">Beranda</a></li>
                    <li><a class="nav-link scrolled {{ Request::is('#Jadwal') ? 'active' : '' }}" href="{{ route ('beranda') }}#Jadwal">Jadwal Peminjaman Lab</a></li>
                    <li><a class="nav-link" href="/login">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </div>
  </header>