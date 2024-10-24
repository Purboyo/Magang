@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

<div class="container">
    <a href="{{ route('Berita.index') }}" class="btn btn-success mb-3">Kembali</a>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- Judul Berita --}}
                    <h2>{{ $berita->judul }}</h2>

                    {{-- Tanggal Terbit --}}
                    <p class="text-muted">Diterbitkan pada: {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</p>

                    {{-- Gambar Berita --}}
                    @if($berita->image)
                        <img src="/image/berita/{{ $berita->image }}" class="img-fluid mb-3 d-block mx-auto" alt="Gambar Berita">
                    @endif

                    {{-- Deskripsi Singkat --}}
                    <p class="font-weight-bold">{{ $berita->deskripsisingkat }}</p>

                    {{-- Deskripsi Lengkap --}}
                    <p>{{ $berita->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
