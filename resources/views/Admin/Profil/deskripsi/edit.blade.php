@extends('layouts.app')

@section('title', 'Edit Deskripsi')

@section('content')
<div class="container">
    <h2>Edit Deskripsi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('deskripsi.update', $deskripsi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $deskripsi->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="npsn" class="form-label">NPSN</label>
            <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $deskripsi->npsn }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $deskripsi->alamat }}" required>
        </div>

        <div class="mb-3">
            <label for="desa" class="form-label">Desa</label>
            <input type="text" class="form-control" id="desa" name="desa" value="{{ $deskripsi->desa }}" required>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $deskripsi->kecamatan }}" required>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" value="{{ $deskripsi->kota }}" required>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $deskripsi->provinsi }}" required>
        </div>

        <div class="mb-3">
            <label for="negara" class="form-label">Negara</label>
            <input type="text" class="form-control" id="negara" name="negara" value="{{ $deskripsi->negara }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status Sekolah</label>
            <input type="text" class="form-control" id="status" name="status" value="{{ $deskripsi->status }}" required>
        </div>

        <div class="mb-3">
            <label for="bentuk" class="form-label">Bentuk Pendidikan</label>
            <input type="text" class="form-control" id="bentuk" name="bentuk" value="{{ $deskripsi->bentuk }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
