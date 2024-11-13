<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="/modern/src/assets/images/logos/favicon.png">
  <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css">
  <!-- link untuk Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper mini-sidebar" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/modern/src/html/index.html" class="text-nowrap logo-img">
            <img src="./app_modern.blade_files/dark-logo.svg" width="180" alt="Logo">
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="init">
          <div class="simplebar-content">
            <ul id="sidebarnav" class="in">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Menu Utama</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('home') ? 'active' : '' }}" href="/home" aria-expanded="false">
                  <span><i class="ti ti-layout-dashboard"></i></span>
                  <span class="hide-menu">Beranda</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('pasien') ? 'active' : '' }}" href="/pasien" aria-expanded="false">
                  <span><i class="ti ti-user"></i></span>
                  <span class="hide-menu">Data Pasien</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('laporan-pasien') ? 'active' : '' }}" href="/laporan-pasien/create" aria-expanded="false">
                  <span><i class="ti ti-user"></i></span>
                  <span class="hide-menu">Laporan Data Pasien</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link {{ request()->is('laporan-daftar') ? 'active' : '' }}" href="/laporan-daftar/create" aria-expanded="false">
                  <span><i class="ti ti-user"></i></span>
                  <span class="hide-menu">Laporan Data Pendaftaran</span>
                </a>
              </li>
            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
              <div class="unlimited-access-img">
                <img src="modern/src/assets/images/backgrounds/rocket.png" alt="Unlimited Access" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <!-- Gambar Profil User dan Dropdown -->
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="modern/src/assets/images/profile/user-1.jpg" alt="User" width="35" height="35" class="rounded-circle">
            </a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-user fs-6"></i>
                  <p class="mb-0 fs-6">My Profile</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-mail fs-6"></i>
                  <p class="mb-0 fs-6">My Account</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-list-check fs-6"></i>
                  <p class="mb-0 fs-6">My Task</p>
                </a>
                <!-- Logout Button -->
                <a href="/modern/src/html/authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            @include('flash::message')
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/modern/src/assets/libs/jquery.min.js"></script>
  <script src="/modern/src/assets/js/sidebarmenu.js"></script>
  <script src="/modern/src/assets/js/app.min.js"></script>
  <script src="/modern/src/assets/libs/simplebar.js"></script>
</body>

</html>