@extends('layouts.app')

@section('title', 'Edit Struktur')

@section('content')
    

    <div class="container">
        <a href="{{ route('struktur.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('struktur.update', $struktur->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/struktur/{{ $struktur->image }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit Nama --}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $struktur->nama }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- edit Jabatan --}}
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan"  value="{{ $struktur->jabatan }}">
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