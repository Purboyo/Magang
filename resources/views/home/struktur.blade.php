@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div
          class="d-flex justify-content-between align-items-center text-white"
        >
          <h2>Struktur Organisasi</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

<!-- Struktur Organisasi -->
<div class="teams bg-light py-5">
  <div class="container">
      <div class="title-container">
          <h2 class="text-center fw-bold">Struktur Organisasi</h2>
      </div>
      <p class="text-center mt-4">
        Struktur organisasi sekolah kami terdiri dari berbagai posisi yang saling mendukung untuk mencapai visi dan misi pendidikan. Setiap anggota tim memiliki peran yang penting dalam menciptakan lingkungan belajar yang efektif, termasuk kepala sekolah, guru, dan staf administrasi. Kami berkomitmen untuk memberikan pendidikan berkualitas dan membangun karakter siswa melalui kolaborasi yang erat di antara semua pihak.
      </p>
      <div class="row">
          @foreach($strukturs as $struktur)
              <div class="col-md-3 mb-4" data-aos="fade-up">
                  <div class="card" style="width: 18rem">
                      <!-- Gambar -->
                      <img src="{{ asset('image/struktur/' . $struktur->image) }}" class="card-img-top" alt="{{ $struktur->nama }}" />
                      <!-- Body Card -->
                      <div class="card-body text-center">
                          <h5 class="card-title fw-bold">{{ $struktur->nama }}</h5>
                          <p class="card-text text-muted">{{ $struktur->jabatan }}</p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</div>

@endsection