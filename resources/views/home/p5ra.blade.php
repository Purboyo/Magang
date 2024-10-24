@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>P5RA</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li>P5RA</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- P5RA Section -->
    <div class="p5ra py-5 bg-light">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">P5RA:  Proyek Penguatan Profil Pelajar Pancasila dan Rahmatan Lil'alaamin</h2>
        </div>
        <div class="text-center">
          <p class="text-muted mt-2">Menjelajahi berbagai aspek dari P5RA yang menjadi bagian integral dari institusi kami.</p>
        </div>

        <!-- Education Section -->
        <div class="row mt-5">
          <div class="col-md-6 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="/assets/img/education.jpg" class="card-img-top" alt="Pendidikan">
              <div class="card-body">
                <h5 class="card-title fw-bold">Pendidikan dan Pengajaran</h5>
                <p class="card-text text-muted">Kami menyediakan pendidikan berkualitas dengan metode pengajaran terbaru dan fasilitas yang memadai untuk mendukung proses belajar mengajar.</p>
                <a href="/pendidikan" class="btn btn-outline-success">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>

          <!-- Research Section -->
          <div class="col-md-6 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="/assets/img/research.jpg" class="card-img-top" alt="Penelitian">
              <div class="card-body">
                <h5 class="card-title fw-bold">Penelitian</h5>
                <p class="card-text text-muted">Kami aktif dalam penelitian dengan tujuan untuk meningkatkan kualitas pendidikan dan memberikan kontribusi pada ilmu pengetahuan.</p>
                <a href="/penelitian" class="btn btn-outline-success">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Community Service Section -->
        <div class="row mt-5">
          <div class="col-md-6 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="/assets/img/community.jpg" class="card-img-top" alt="Pengabdian">
              <div class="card-body">
                <h5 class="card-title fw-bold">Pengabdian kepada Masyarakat</h5>
                <p class="card-text text-muted">Kegiatan pengabdian masyarakat kami berfokus pada pemberdayaan dan peningkatan kesejahteraan komunitas di sekitar kami.</p>
                <a href="/pengabdian" class="btn btn-outline-success">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>

          <!-- Assets Section -->
          <div class="col-md-6 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="/assets/img/assets.jpg" class="card-img-top" alt="Aset">
              <div class="card-body">
                <h5 class="card-title fw-bold">Aset dan Fasilitas</h5>
                <p class="card-text text-muted">Kami memiliki aset dan fasilitas yang mendukung aktivitas pendidikan, penelitian, dan pengabdian kepada masyarakat dengan standar tinggi.</p>
                <a href="/aset" class="btn btn-outline-success">Pelajari Lebih Lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End P5RA Section -->
@endsection
