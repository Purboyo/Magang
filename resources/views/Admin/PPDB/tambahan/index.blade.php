@extends('layouts.app')

@section('title', 'Data tambahan PPDB')

@section('content')
    <div class="container">
        <a href="{{ route('addppdb.create') }}" class="btn btn-success mb-3">
            <i class="fa fa-plus"></i> Tambah Data
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong> {{ $message }}
            </div>
        @endif

        <div class="row">
            @foreach ($addppdbs as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fa {{ $item->ikon }} fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('addppdb.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('addppdb.destroy', $item->id) }}" method="POST" class="d-inline">
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
