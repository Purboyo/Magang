@extends('layouts.app')

@section('title', 'Data Statistik')

@section('content')
<div class="container">
    {{-- <a href="{{route('statistik.create')}}" class="btn btn-success mb-3">Tambah Data</a> --}}

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container mt-5 text-center">
        @foreach ($statistiks as $statistik)
            <div class="row mt-4" data-aos="fade-up">
                <!-- Jumlah Siswa -->
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->siswa }}</h1>
                        <p>Jumlah Siswa</p>
                    </div>
                </div>
                <!-- Jumlah Guru -->
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->guru }}</h1>
                        <p>Jumlah Guru</p>
                    </div>
                </div>
                <!-- Jumlah Karyawan -->
                <div class="col-md-4">
                    <div class="statistik-card">
                        <h1 class="fw-bolder">{{ $statistik->karyawan }}</h1>
                        <p>Jumlah Karyawan</p>
                    </div>
                </div>
                <a href="{{ route('statistik.edit', $statistik->id) }}" class="btn btn-warning m-3"><i class="fas fa-edit"></i> Edit</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
