@extends('websites.app')

@section('title', 'MTS Al-Mu\'awanah')


@section('content')

    <!-- caroursel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          @foreach($sliders as $key => $slider)
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" 
                  class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}">
              </button>
          @endforeach
      </div>
  
      <div class="carousel-inner">
          @foreach($sliders as $key => $slider)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ asset('image/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->title }}">
              <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $slider->title }}</h5>
                  <p>{{ $slider->description }}</p>
              </div>
          </div>
          @endforeach
      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>  
    <!-- end caroursel -->

    {{-- Sambutan Kepala Sekolah --}}
    <div class="container sambutan-section">
      <div class="title-container">
        <h2 class="text-center fw-bold">Sambutan Kepala Sekolah</h2>
      </div>
      <div class="row justify-content-center mt-4" data-aos="fade-up">
        <div class="col-md-10">
          <div class="sambutan-card text-center">
            <img src="{{ asset('image/sambutan/'. $sambutans->gambar) }}" alt="Kepala Sekolah" />
            <p>
              {!! nl2br(e($sambutans->konten)) !!}
              <br /><br />
              <strong>{{ $sambutans->nama }}</strong><br />
              {{ $sambutans->jabatan }}
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- end Sambutan Kepala Sekolah --}}

    <!-- About Us -->
    <div class="title mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PROFIL</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
            <h3 class="fw-bold about-us-title">
              {{$profils->judul}}
            </h3>
            <p class="fw-bolder mt-4 about-us-subtitle">
              {{$profils->subjudul}}
            </p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>
              {{ $profils->sejarahsingkat }}
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list1 }}
              </li>
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list2 }}
              </li>
              <li class="list-group-item">
                <div class="i fa fa-check-double primary"></div>
                {{ $profils->list3 }}
              </li>
            </ul>
            <p class="mt-2">
              {{ $profils->penutup}}
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end About Us -->

    <!-- Visi dan Misi -->
    <div class="container mt-5">
      <div class="row">
        <!-- Kolom Kiri: Visi -->
        <div class="col-md-6">
          <div class="p-4 ">        
            <div class="title-container">
            <h2 class="text-center fw-bold">VISI</h2>
          </div>
            <p class="fw-bolder text-center mt-4 about-us-subtitle" data-aos="fade-right">
              “{{ $visis->visi }}”
            </p>
          </div>
        </div>
        <!-- Kolom Kanan: Misi -->
        <div class="col-md-6">
          <div class="p-4 ">
            <div class="title-container">
              <h2 class="text-center fw-bold">MISI</h2>
            </div>
            <ul class="mt-4 list-group list-group-flush" data-aos="fade-left">
              @foreach($misis as $misi)
              <li>{{ $misi->misi }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end Visi dan Misi -->

    {{-- Statitstik Sekolah --}}
    <div class="container mt-5">
      <div class="title-container">
        <h2 class="text-center fw-bold">STATISTIK</h2>
      </div>
      <div class="row mt-4" data-aos="fade-up">
        <!-- Jumlah Siswa -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->siswa }}</h1>
            <p>Jumlah Siswa</p>
          </div>
        </div>
        <!-- Jumlah Guru -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->guru }}</h1>
            <p>Jumlah Guru</p>
          </div>
        </div>
        <!-- Jumlah Karyawan -->
        <div class="col-md-4">
          <div class="statistik-card">
            <div class="icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <h1 class="fw-bolder">{{ $statistiks->karyawan }}</h1>
            <p>Jumlah Karyawan</p>
          </div>
        </div>
      </div>
    </div>
    {{-- end Statistik --}}


    <!-- Layanan -->
    {{-- <div class="services mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center p-4">
          <h2 class="fw-bold">LAYANAN</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat,
          iusto.
        </p>
        <div class="row mt-5">
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-graduation-cap fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">PPDB</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-envelope fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Surat</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-bullhorn fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Pengumuman</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Buku Pembelajaran</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-calendar-days fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">
                  Rencana Pembelajaran
                </div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-star-and-crescent fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Kajian Keagamaan</div>
                <p class="card-description mt-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Necessitatibus alias a suscipit, repellat numquam voluptates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- end Layanan -->

    <!-- Dokumentasi -->
    <div class="title mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">DOKUMENTASI</h2>
        </div>
        <div class="row mt-4">
          <div class="col-md-12 d-flex justify-content-center">
            <ul class="list-unstyled d-flex portfolio-filter">
              <li data-filter="*" class="py-2 px-4 filter-active text-white">All</li>
              <li data-filter=".filter-alam" class="py-2 px-4">Alam</li>
              <li data-filter=".filter-ekstrakurikuler" class="py-2 px-4">Ekstrakurikuler</li>
              <li data-filter=".filter-pramuka" class="py-2 px-4">Pramuka</li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory portfolio-container" data-aos="zoom-in-up">
              <div class="mansory-sizer"></div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p1.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p2.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-pramuka" >
                <img src="assets/img/p3.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-ekstrakurikuler" >
                <img src="assets/img/p4.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p5.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p6.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p7.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-ekstrakurikuler" >
                <img src="assets/img/p8.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p9.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-alam" >
                <img src="assets/img/p10.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-ekstrakurikuler" >
                <img src="assets/img/p11.jpg" alt="" class="img-fluid" />
              </div>
              <div class="mansory-item m-2 portfolio-item filter-ekstrakurikuler" >
                <img src="assets/img/p12.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Dokumentasi-->

    {{-- <!-- Kerja Sama -->
    <div class="kerjasama mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Kerja Sama</h2>
        </div>
        <div class="row mt-5 text-center">
          <div class="col-md-3 pt-5 text-center mx-auto" data-aos="zoom-in-up">
              <img src="assets/img/kemenag.jpeg" class="img-fluid brand-image" />
          </div>
          <div class="col-md-3 pt-5 text-center mx-auto" data-aos="zoom-in-up">
              <img src="assets/img/laziznu.png" class="img-fluid brand-image" />
          </div>
        </div>
      </div>
    </div>
    <!-- end Kerja Sama --> --}}

    @endsection
