@extends('websites.app')

@section('content')
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>PPDB</h2>
          <ol class="d-flex list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Beranda</a></li>
            <li>PPDB</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- PPDB Section -->
    <div class="ppdb py-5">
      <div class="container">
        @foreach ($ppdbs as $ppdb)
        <div class="row align-items-center">
          <!-- Poster Section -->
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{ asset('image/ppdb/'. $ppdb->image) }}" alt="Poster PPDB" class="img-fluid shadow rounded">
          </div>

          <!-- Info Section -->
          <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold">{{ $ppdb->title }}</h2>
            <p class="mt-4">{{ $ppdb->subtitle }}</p>
            <ul class="list-unstyled">
              @foreach ($lists as $list)
              <li class="mb-2">
                  <i class="fa fa-check-circle text-success"></i> {{ $list->list }}
              </li>
          @endforeach
            </ul>

            <!-- Registration Link -->
            <a href="" class="btn btn-success mt-4">Daftar Sekarang</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- End PPDB Section -->

    <!-- Additional Information Section -->
    <div class="bg-light py-5">
      <div class="container">
        <h3 class="text-center fw-bold mb-4">Kenapa Memilih Sekolah Kami?</h3>
        <div class="row">
          @foreach ($addppdbs as $item)
            <div class="col-md-4 text-center" data-aos="fade-up">
              <i class="fa {{ $item->ikon }} fa-3x text-success mb-3"></i>
              <h5 class="fw-bold">{{ $item->title }}</h5>
              <p>{{ $item->description }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>    
    <!-- End Additional Information Section -->

@endsection