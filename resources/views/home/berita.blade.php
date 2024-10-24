@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Berita</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li class="ms-2">Berita</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- Berita Section -->
    <div class="berita py-5">
      <div class="container">
        <div class="title-container text-center mb-4">
          <h2 class="fw-bold">Berita Terbaru</h2>
          <p class="text-muted">Update terbaru dari kegiatan dan acara kami.</p>
        </div>
        
        <!-- Grid for news items -->
        @foreach ($beritas as $index => $berita)
          <div class="row mb-5 align-items-stretch">
            @if ($index % 2 == 0)
              <!-- Gambar di Kanan untuk Berita Genap -->
              <div class="col-md-6 order-md-2 mb-3 d-flex">
                <div class="ratio ratio-16x9 w-100">
                  <img src="{{ asset('image/berita/'. $berita->image) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="object-fit: cover;">
                </div>
              </div>
              <div class="col-md-6 order-md-1 d-flex">
                <div class="card h-100 w-100 border-0">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">{{ $berita->judul }}</h5>
                    <p class="text-muted">
                      {{ implode(' ', array_slice(explode(' ', $berita->deskripsisingkat), 0, 100)) }}...
                    </p>
                    <a href="{{ route('berita.detail', $berita->id) }}" class="btn btn-success mt-auto">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            @else
              <!-- Gambar di Kiri untuk Berita Ganjil -->
              <div class="col-md-6 mb-3 d-flex">
                <div class="ratio ratio-16x9 w-100">
                  <img src="{{ asset('image/berita/'. $berita->image) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="object-fit: cover;">
                </div>
              </div>
              <div class="col-md-6 d-flex">
                <div class="card h-100 w-100 border-0">
                  <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">{{ $berita->judul }}</h5>
                    <p class="text-muted">
                      {{ implode(' ', array_slice(explode(' ', $berita->deskripsisingkat), 0, 100)) }}...
                    </p>
                    <a href="{{ route('berita.detail', $berita->id) }}" class="btn btn-success mt-auto">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
            @endif
          </div>
        @endforeach

      </div>
    </div>
    <!-- End Berita Section -->
@endsection
