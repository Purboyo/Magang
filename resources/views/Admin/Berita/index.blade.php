@extends('layouts.app')

@section('title', 'Data Berita')

@section('content')
    <div class="container">
        <a href="{{ route('Berita.create') }}" class="btn btn-success mb-3">
            <i class="fa fa-plus"></i> Tambah Data
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong> {{ $message }}
            </div>
        @endif

        <div class="row">
            @foreach ($beritas as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <p><i class="fa fa-calendar-alt"></i> {{ $item->tanggal}}</p>
                            <div class="mb-3 text-center">
                                <img src="{{ asset('image/berita/' . $item->image) }}" alt="{{ $item->image }}" class="img-fluid rounded" width="300">
                            </div>
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ Str::limit($item->deskripsisingkat,30) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('Berita.show', $item->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
                            <a href="{{ route('Berita.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('Berita.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
