@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')

<div class="container">
    <a href="{{ route('Berita.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('Berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Judul Berita --}}
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Berita">
                </div>
                
                @error('judul')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- Tanggal --}}
                <div class="form-group">
                    <label for="tanggal">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal">
                </div>
                
                @error('tanggal')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- Deskripsi Singkat --}}
                <div class="form-group">
                    <label for="deskripsisingkat">Deskripsi Singkat</label>
                    <textarea class="form-control" id="deskripsisingkat" name="deskripsisingkat" rows="2" placeholder="Masukan Deskripsi Singkat"></textarea>
                </div>
                
                @error('deskripsisingkat')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- Deskripsi Lengkap --}}
                <div class="form-group">
                    <label for="deskripsi">Isi Berita</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Masukan isi berita"></textarea>
                </div>
                
                @error('deskripsi')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- Gambar --}}
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Masukan file dengan format jpg, jpeg, png!</p>
                </div>
                
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- Submit --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Tambah Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
