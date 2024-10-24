@extends('websites.app')

@section('content')

    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div
          class="d-flex justify-content-between align-items-center text-white"
        >
          <h2>Organisasi</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Organisasi</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- Organisasi -->
    <div class="teams bg-light py-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">Organisasi</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum at
          consectetur, eligendi quibusdam inventore in ad temporibus soluta
          libero autem distinctio, impedit qui ab repudiandae velit. Quis
          dolorem molestias mollitia?
        </p>
        <div class="row mt-5">
          @foreach ($organisasis as $organisasi)
          <div class="col-md-6 mt-4" data-aos="fade-right">
            <div class="card border-0 shadow shadow-sm">
              <div class="card-body organisasi-item p-5">
                <img
                  src="{{ asset('image/organisasi/'. $organisasi->image) }}"
                  alt="Nama Organisasi"
                  class="img-organisasi float-start rounded-circle me-3"
                />
                <strong class="d-block">{{$organisasi->nama}}</strong>
                <small class="text-muted">{{$organisasi->sub_nama}}</small>
                <p class="fst-itali mt-3 fs-5">
                  <i class="fa-solid fa-quote-left"></i>
                  {{$organisasi->konten}}
                  <i class="fa-solid fa-quote-right"></i>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End Organisasi -->

    <!-- Ekstrakurikuler -->
    <div class="teams bg-light py-3">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">EkstrakuriKuler</h2>
        </div>
        <p class="text-center mt-4">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum at
          consectetur, eligendi quibusdam inventore in ad temporibus soluta
          libero autem distinctio, impedit qui ab repudiandae velit. Quis
          dolorem molestias mollitia?
        </p>
        <div class="row mt-5">
          @foreach ($ekstrakurikulers as $ekstrakurikuler)
          <div class="col-md-6 mt-4" data-aos="fade-right">
            <div class="card border-0 shadow shadow-sm">
              <div class="card-body organisasi-item p-5">
                <img
                src="{{ asset('image/ekstrakurikuler/'. $ekstrakurikuler->image) }}"
                alt=""
                class="img-organisasi float-start rounded-circle me-3"
                />
                <strong class="d-block">{{$ekstrakurikuler->nama}}</strong>
                <small class="text-muted">{{$ekstrakurikuler->sub_nama}}</small>
                <p class="fst-itali mt-3 fs-5">
                  <i class="fa-solid fa-quote-left"></i>{{$ekstrakurikuler->konten}}
                  <i class="fa-solid fa-quote-right"></i>
                </p>
              </div>
            </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- End Ekstrakurikuler -->

@endsection
