<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'MTS Al-Mu\'awanah')</title>
    <!-- Bootstrap Css -->
    <link
      href="assets/vendor/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css" />
    <!-- aos-->
     <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  </head>
  <body class="body">
   <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top py-">
  <div class="container">
    <img src="assets/img/logo.jpeg" alt="Logo MTS Al-Mu'awanah" class="logo" />
    <a class="navbar-brand fw-bold" href="#">
      <span class="primary">MTS </span>AL-MU'AWANAH
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        {{-- Dropdown Profil --}}
        <li class="nav-item dropdown">
          <a class="nav-link fw-bold dropdown-toggle {{ Request::is('sejarahalmuawanah', 'strukturorganisasi', 'fasilitasmadrasah') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sejarahalmuawanah">Sejarah</a></li>
            <li><a class="dropdown-item" href="strukturorganisasi">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="fasilitasmadrasah">Fasilitas</a></li>
          </ul>
        </li>
        {{-- PPDB --}}
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Request::is('ppdbmtsalmuawanah') ? 'active' : '' }}" href="ppdbmtsalmuawanah">PPDB</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link fw-bold dropdown-toggle {{ Request::is('prestasi', 'p5ra', 'organisasi') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pendidikan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="prestasi">Prestasi</a></li>
            <li><a class="dropdown-item" href="p5ra">P5RA</a></li>
            <li><a class="dropdown-item" href="organisasi">Organisasi dan Ekstrakurikuler</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Request::is('berita') ? 'active' : '' }}" href="berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Request::is('dokumentasi') ? 'active' : '' }}" href="dokumentasi">Dokumentasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold {{ Request::is('contact') ? 'active' : '' }}" href="contact">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- endnavbar -->


    <!-- Main Content -->
    <main class="">
      @yield('content')
    </main>


    <!-- Footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h4 class="fw-bold">MADRASAH</h4>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Adipisci maiores aspernatur dolore.
              </p>
              <strong>Telephone</strong> : <span>+628123456789</span>
              <br />
              <strong>Email</strong> : <span>EmailMadrasah@gmail.com</span>
            </div>
            <!-- Link -->
            <div class="col-md-3 offset-md-1">
              <h4 class="fw-bold">Useful Links</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none">
                    <i class="fa fa-chevron-right primary"></i> Beranda
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none">
                    <i class="fa fa-chevron-right primary"></i> Profil
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none">
                    <i class="fa fa-chevron-right primary"></i> Layanan
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none">
                    <i class="fa fa-chevron-right primary"></i> Berita
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none">
                    <i class="fa fa-chevron-right primary"></i> Kontak Kami
                  </a>
                </li>
              </ul>
            </div>
            
            <div class="col-md-4 offset-md-1">
              <h4 class="fw-bold">Ayo Gabung Madrasah</h4>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et!
              </p>
              <div class="input-group">
                <input
                  type="Text"
                  class="form-control"
                  placeholder="Emailmu@contoh.com"
                />
                <button
                  class="btn btn-gabung"
                  type="button"
                  id="inputGroupFileAddon04"
                >
                  Gabung
                </button>
              </div>
              {{-- <div class="social-links mt-4">
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="copyright">
                &copy; Copyright <strong>MTS Al-Mu'Awanah</strong>. All Rights Reserved
              </div>
              <div class="credits">Designed by Purboyo Broto Umbaran</div>
            </div>
            <div class="col-md-6">
              <div class="social-links float-end">
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->

    <!-- to top -->
    <a href="#" class="back-to-top p-3">
      <i class="fa-solid fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotop/isotope.pkgd.min.js"></script>
  </body>