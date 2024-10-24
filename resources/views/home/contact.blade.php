@extends('websites.app')

@section('content')

    <!-- Breadcumbs -->
    <div class="breadcumbs py-2">
      <div class="container">
        <div
          class="d-flex justify-content-between align-items-center text-white"
        >
          <h2>Kontak</h2>
          <ol class="d-flex list-unstyled">
            <li>Beranda</li>
            <li>Kontak</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Breadcumbs -->

    <!-- contact -->
    <div class="contact mb-5">
      <div class="maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.919235473816!2d108.92670647500299!3d-7.583770192430729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6571184d0fc4af%3A0x7d80a15482ab9d89!2sMTS%20Al-Mu&#39;awanah!5e0!3m2!1sid!2sid!4v1723445566695!5m2!1sid!2sid"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col md-12">
            <div class="card border-0 shadow shadow-sm">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <i
                        class="fa fa-map-marker-alt fa-2x primary float-start me-4"
                      ></i>
                      <h4 class="fw-bolder">Lokasi</h4>
                      <p class="ms-5">
                        CW8H+FPV, Desa Kalijeruk Kec, Tegalanyar, Kalijeruk,
                        Kec. Kawunganten, Kabupaten Cilacap, Jawa Tengah 53253
                      </p>
                    </div>
                    <div class="col-md-4">
                      <i
                        class="fa fa-envelope fa-2x primary float-start me-3"
                      ></i>
                      <h4 class="fw-bolder">Email</h4>
                      <p class="ms-5">email@gmail.com</p>
                    </div>
                    <div class="col-md-4">
                      <i class="fa fa-phone fa-2x primary float-start me-3"></i>
                      <h4 class="fw-bolder">Telephone</h4>
                      <p class="ms-5">
                        +62 123 4567 890
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col md-12">
            <div class="card border-0 shadow">
              <div class="card-body p-4">
                <div class="row mt-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nama Pengirim "
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email Pengirim "
                    />
                  </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Subjek">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <textarea name="" id="" class="form-control" placeholder="Pesan Pengirim"></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <button type="submit" class="btn btn-submit">Kirim</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end contact -->

@endsection