@extends('layouts.app')

@section('title', 'Data Struktur Organisasi')

@section('content')
    <div class="container">
        <a href="{{ route('struktur.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            @foreach ($strukturs as $key => $struktur)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Nomor -->
                    <div class="col-md-1 text-center fw-bold">
                        {{ $loop->iteration + (($strukturs->currentPage() - 1) * $strukturs->perPage()) }}
                    </div>

                    <!-- Gambar -->
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('image/struktur/' . $struktur->image) }}" alt="{{ $struktur->title }}" class="img-fluid rounded" width="100">
                    </div>

                    <!-- Nama dan Jabatan -->
                    <div class="col-md-6">
                        <h5 class="mb-1">{{ $struktur->nama }}</h5>
                        <p class="text-muted">{{ $struktur->jabatan }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-3 text-md-end text-center">
                        <a href="{{ route('struktur.edit', $struktur->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('struktur.destroy', $struktur->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $strukturs->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
