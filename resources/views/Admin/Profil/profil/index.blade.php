@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<div class="container mt-2">
    <div class="title mt-5">
        <div class="container">
            @foreach ($profils as $profil)

            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="fw-bold about-us-title">
                        {{ $profil->judul }}
                    </h3>
                    <p class="fw-bolder mt-4 about-us-subtitle">
                        {{ $profil->subjudul }}
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>
                        {{ $profil->sejarahsingkat }}
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="i fa fa-check-double primary"></div>
                            {{ $profil->list1 }}
                        </li>
                        <li class="list-group-item">
                            <div class="i fa fa-check-double primary"></div>
                            {{ $profil->list2 }}
                        </li>
                        <li class="list-group-item">
                            <div class="i fa fa-check-double primary"></div>
                            {{ $profil->list3 }}
                        </li>
                    </ul>
                    <p class="mt-2">
                        {{ $profil->penutup }}
                    </p>
                </div>
                <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-warning">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </div>        
            @endforeach
        </div>
    </div>
</div>
@endsection
