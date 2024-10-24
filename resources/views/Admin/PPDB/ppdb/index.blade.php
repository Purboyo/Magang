@extends('layouts.app')

@section('title', 'Data PPDB')

@section('content')
    <div class="container">
        <!-- Bagian PPDB -->
        
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="mb-4">
            @foreach ($ppdbs as $ppdb)
                <div class="row my-4">
                    <!-- Gambar -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('image/ppdb/' . $ppdb->image) }}" alt="{{ $ppdb->title }}" class="img-fluid rounded" width="400">
                    </div>

                    <!-- Konten, Nama, Jabatan -->
                    <div class="col-md-8">
                        <h5 class="fw-bold">{{ $ppdb->title }}</h5>
                        <p class="text-muted">{!! nl2br(e($ppdb->subtitle)) !!}</p>
                        <a href="{{ route('ppdb.edit', $ppdb->id) }}" class="btn btn-warning w-100 mt-2">Edit</a>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>

        <!-- Bagian List PPDB -->
        <div class="mb-4">
            <a href="{{ route('listppdb.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah List</a>
            @foreach ($lists as $list)
                <div class="row mb-4 p-3 border rounded align-items-center">
                    <!-- Nomor -->
                    <div class="col-md-1 text-center fw-bold">
                        {{ $loop->iteration }}
                    </div>

                    <!-- Nama -->
                    <div class="col-md-6">
                        <h5 class="mb-1">{{ $list->list }}</h5>
                    </div>

                    <!-- Aksi -->
                    <div class="col-md-5 text-md-end text-center">
                        <a href="{{ route('listppdb.edit', $list->id) }}" class="btn btn-warning btn-sm mb-1"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ route('listppdb.destroy', $list->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-edit"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
