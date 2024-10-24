@extends('layouts.app')

@section('title', 'Data Beranda')

@section('content')

<div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil!</strong>
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Menampilkan Sambutan --}}
    <div class="border rounded p-3 mb-5" style="border: 1px solid #dee2e6;">

        @foreach ($sambutans as $sambutan)
            <div class="row my-4">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('image/sambutan/'. $sambutan->gambar) }}" alt="{{ $sambutan->title }}" class="img-fluid rounded" width="200">
                </div>
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

    {{-- Menampilkan Statistik --}}
    <div class="border rounded p-3 mb-5" style="border: 1px solid #dee2e6;">
        <div class="row mt-4">
            @foreach ($statistiks as $statistik)
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->siswa }}</h1>
                        <p>Jumlah Siswa</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->guru }}</h1>
                        <p>Jumlah Guru</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->karyawan }}</h1>
                        <p>Jumlah Karyawan</p>
                    </div>
                </div>
                <a href="{{ route('statistik.edit', $statistik->id) }}" class="btn btn-warning "><i class="fas fa-edit"></i> Edit</a>
            @endforeach
        </div>
    </div>


   {{-- Kartu untuk Menampilkan Slider --}}
<div class="border rounded p-3 mb-5" style="border: 1px solid #dee2e6;">
    <a href="{{ route('sliders.create') }}" class="btn btn-success mb-5">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <div class="row row-cols-1 row-cols-md-3 g-4">  <!-- Corrected the closing quote here -->
        @foreach ($sliders as $slider)
            <div class="col mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('image/' . $slider->image) }}" alt="{{ $slider->title }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $slider->title }}</h5>
                        <p class="card-text">{{ Str::limit($slider->description, 70) }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>

@endsection
