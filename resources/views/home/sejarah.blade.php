@extends('websites.app')

@section('content')
      <!-- Breadcumbs -->
      <div class="breadcumbs py-2">
        <div class="container">
          <div
            class="d-flex justify-content-between align-items-center text-white"
          >
            <h2>Sejarah</h2>
            <ol class="d-flex list-unstyled">
              <li>Beranda</li>
              <li>Sejarah</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- End Breadcumbs -->

      {{-- Profile Sekolah --}}
      <div class="container school-profile mt-5">
        <div class="row">
            <!-- Header Sekolah -->
            <div class="school-header col-12 text-center">
                <h1>MTS AL-MUAWANAH KAWUNGANTEN</h1>
            </div>
        </div>
    
        <div class="row mb-3">
            <!-- Gambar Sekolah -->
            <div class="col-md-4">
                <img src="{{ asset('image/sejarah/'. $sejarahs->foto) }}" alt="{{$sejarahs->foto}}" class="img-fluid rounded school-image">
            </div>
    
            <!-- Deskripsi Sekolah -->
            <div class="col-md-8">
                <div class="school-description">
                    <p>
                        {{ $sejarahs->deskripsi }} 
                    </p>
    
                    <h5>Sejarah Singkat</h5>
                    <p>
                      {{ $sejarahs->sejarahsingkat }}                     
                    </p>
                </div>
            </div>
        </div>
      
    
    
        <div class="row info-table mt-4">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>{{$deskripsis->nama}}</td>
                </tr>
                <tr>
                    <th>NPSN</th>
                    <td>{{$deskripsis->npsn}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$deskripsis->alamat}}</td>
                </tr>
                <tr>
                    <th>Desa</th>
                    <td>{{$deskripsis->desa}}</td>
                </tr>
                <tr>
                    <th>Kecamatan/Kota</th>
                    <td>{{$deskripsis->kecamatan}} / {{$deskripsis->kota}}</td>
                </tr>
                <tr>
                    <th>Provinsi/Negara</th>
                    <td>{{$deskripsis->provinsi}} / {{$deskripsis->negara}}</td>
                </tr>
                <tr>
                    <th>Status Sekolah</th>
                    <td>{{$deskripsis->status}}</td>
                </tr>
                <tr>
                    <th>Bentuk Pendidikan</th>
                    <td>{{$deskripsis->bentuk}}</td>
                </tr>
            </table>
        </div>
      </div>
      {{-- end Profil Sekolah --}}      

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
    
      @endsection