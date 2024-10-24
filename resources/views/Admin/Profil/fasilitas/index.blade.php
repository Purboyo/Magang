@extends('layouts.app')

@section('title', 'Data Fasilitas Organisasi')

@section('content')
    <div class="container">
        <a href="{{ route('fasilitas.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            @foreach ($fasilitass as $key => $fasilitas)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Nomor -->
                    <div class="col-md-1 text-center fw-bold">
                        {{ $loop->iteration + (($fasilitass->currentPage() - 1) * $fasilitass->perPage()) }}
                    </div>

                    <!-- Gambar -->
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('image/fasilitas/' . $fasilitas->image) }}" alt="{{ $fasilitas->title }}" class="img-fluid rounded" width="200">
                    </div>

                    <!-- Nama dan Jabatan -->
                    <div class="col-md-6">
                        <h5 class="mb-1">Nama   : {{ $fasilitas->nama }}</h5>
                        <h5 class="mb-1">Total : {{ $fasilitas->jumlah }}</h5>
                        <p class="text-muted">{{ $fasilitas->konten }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-3 text-md-end text-center">
                        <a href="{{ route('fasilitas.edit', $fasilitas->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('fasilitas.destroy', $fasilitas->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $fasilitass->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
