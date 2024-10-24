@extends('layouts.app')

@section('title', 'Data Organisasi')

@section('content')
    <div class="container">
        <a href="{{ route('Organisasi.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            @foreach ($organisasis as $organisasi)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Gambar -->
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('image/organisasi/' . $organisasi->image) }}" alt="{{ $organisasi->image }}" class="img-fluid rounded" width="200">
                    </div>

                    <!-- Nama dan Jabatan -->
                    <div class="col-md-6">
                        <h5 class="mb-1">Nama   : {{ $organisasi->nama }}</h5>
                        <h5 class="mb-1">{{ $organisasi->sub_nama }}</h5>
                        <p class="text-muted">{{ $organisasi->konten }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-3 text-md-end text-center">
                        <a href="{{ route('Organisasi.edit', $organisasi->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('Organisasi.destroy', $organisasi->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
