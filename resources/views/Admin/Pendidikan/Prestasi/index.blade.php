@extends('layouts.app')

@section('title', 'Data Prestasi')

@section('content')
    <div class="container">
        <a href="{{ route('Prestasi.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            @foreach ($prestasis as $key => $prestasi)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Nomor -->
                    <div class="col-md-1 text-center fw-bold">
                        {{ $loop->iteration + (($prestasis->currentPage() - 1) * $prestasis->perPage()) }}
                    </div>
                    <!-- Gambar -->
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('image/prestasi/' . $prestasi->image) }}" alt="{{ $prestasi->title }}" class="img-fluid rounded" width="100">
                    </div>

                    <!-- Title dan deskripsi -->
                    <div class="col-md-6">
                        <h5 class="mb-1 fw-bold">{{ $prestasi->title }}</h5>
                        <p class="text-muted">{{ $prestasi->deskripsi }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-3 text-md-end text-center">
                        <a href="{{ route('Prestasi.edit', $prestasi->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('Prestasi.destroy', $prestasi->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $prestasis->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
