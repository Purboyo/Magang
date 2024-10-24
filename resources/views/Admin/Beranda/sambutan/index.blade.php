@extends('layouts.app')

@section('title', 'Data Sambutan')

@section('content')
    

    <div class="container">
        {{-- <a href="{{ route('sambutan.create') }}" class="btn btn-success mb-3">Tambah Data</a> --}}

        @if($message= Session::get('success'))
        <div
            class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
        @endif
        <div class="container">
            @foreach ($sambutans as $sambutan)
                <div class="row my-4">
                    <!-- Gambar -->
                    <div class="col-md-3 text-center">
                        <img src="{{ asset('image/sambutan/'. $sambutan->gambar) }}" alt="{{ $sambutan->title }}" class="img-fluid rounded" width="200">
                    </div>
        
                    <!-- Konten, Nama, Jabatan -->
                    <div class="col-md-9 d-flex flex-column justify-content-center">
                        <p>{!! nl2br(e($sambutan->konten)) !!}</p>
                        <h5 class="fw-bold">{{ $sambutan->nama }}</h5>
                        <p class="text-muted">{{ $sambutan->jabatan }}</p>
                        <a href="{{ route('sambutan.edit', $sambutan->id) }}" class="btn btn-warning w-100 mt-2"><i class="fas fa-edit"></i> Edit</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

    </div>

@endsection