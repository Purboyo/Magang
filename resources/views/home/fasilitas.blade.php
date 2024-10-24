@extends('websites.app')

@section('content')
    
    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
       <div class="container">
         <div
           class="d-flex justify-content-between align-items-center text-white"
          >
          <h2>Fasilitas</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Fasilitas</li>
            </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->    
    
    {{-- Fasilitas --}}
    <div class="container my-5">
      <div class="title-container">
        <h2 class="text-center fw-bold">Fasilitas</h2>
      </div>
      <!-- Card Section -->
      <div class="row mt-5">
        @foreach ($fasilitass as $fasilitas)
          <div class="col-md-4 mb-4">
              <div class="card facility-card">
                  <img src="{{ asset('image/fasilitas/' . $fasilitas->image) }}" class="card-img-top" alt="{{$fasilitas->name}}">
                  <div class="card-body">
                      <h5 class="fw-bolder card-title">{{$fasilitas->jumlah}} {{$fasilitas->nama,}}</h5>
                      <p class="card-text">{{$fasilitas->konten}}</p>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  <!-- end fasilitas -->

  @endsection