@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Prestasi</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li>Prestasi</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- Prestasi Section -->
    <div class="prestasi py-5 bg-light">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">Prestasi Kami</h2>
          </div>
          <div class="text-center">
          <p class="text-muted mt-2">Sekolah kami telah meraih berbagai prestasi di tingkat nasional dan internasional. Berikut adalah beberapa di antaranya.</p>
        </div>

        <!-- Prestasi List -->
        <div class="row mt-5">
          @foreach ($prestasis as $prestasi)
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card shadow-sm">
              <img src="{{ asset('image/prestasi/' . $prestasi->image) }}" class="card-img-top" alt="{{ $prestasi->title }}">
              <div class="card-body">
                <h5 class="card-title fw-bold">{{ $prestasi->title }}</h5>
                <p class="card-text text-muted">{{ $prestasi->deskripsi }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <!-- More Achievements -->
        {{-- <div class="text-center mt-5">
          <a href="/prestasi-lainnya" class="btn btn-outline-success">Lihat Prestasi Lainnya</a>
        </div> --}}
      </div>
    </div>
    <!-- End Prestasi Section -->
@endsection
