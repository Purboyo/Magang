@extends('layouts.app')

@section('title', 'Tambah Struktur')

@section('content')
    

    <div class="container">
        <a href="{{route('struktur.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('struktur.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="title">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Nama --}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Jabatan --}}
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" cols="30" rows="10" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
                </div>
                @error('jabatan')
                <small style="color: red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
       </div>
    </div>

@endsection