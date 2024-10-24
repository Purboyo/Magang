@extends('layouts.app')

@section('title', 'Data P5RA')

@section('content')
    <div class="container">
        <a href="{{ route('P5ra.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="container">
            @foreach ($p5ras as $key => $p5ra)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Nomor -->
                    {{-- <div class="col-md-1 text-center fw-bold">
                        {{ $loop->iteration + (($p5ras->currentPage() - 1) * $p5ras->perPage()) }}
                    </div> --}}
                    <!-- Gambar -->
                    <div class="col-md-2 text-center">
                        <img src="{{ asset('image/P5ra/' . $p5ra->gambar) }}" alt="{{ $p5ra->gambar }}" class="img-fluid" width="200">
                    </div>

                    <!-- Title dan deskripsi -->
                    <div class="col-md-6">
                        <h5 class="mb-1 fw-bold">{{ $p5ra->judul }}</h5>
                        <p class="text-muted">{{ $p5ra->deskripsi }}</p>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-3 text-md-end text-center">
                        <a href="{{ route('P5ra.edit', $p5ra->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('P5ra.destroy', $p5ra->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{-- <div class="d-flex justify-content-center">
            {{ $p5ras->links('pagination::bootstrap-4') }}
        </div> --}}
    </div>
@endsection
