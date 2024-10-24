@extends('layouts.app')

@section('title', 'Edit Sambutan')

@section('content')
    

    <div class="container">
        <a href="{{ route('sambutan.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sambutan.update', $sambutan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/sambutan/{{ $sambutan->gambar }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="title">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('gambar')
                <small style="color: red">{{ $message }}</small>
                @enderror                
                {{-- edit deskripsi --}}
                <div class="form-group">
                    <label for="title">Konten</label>
                    <textarea class="form-control" cols="30" rows="10" id="konten" name="konten" placeholder="Masukkan Konten" >{{ $sambutan->konten }}</textarea>
                </div>
                @error('konten')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit nama --}}
                <div class="form-group">
                    <label for="title">Nama Kepala Sekolah</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Kepala Sekolah" value="{{ $sambutan->nama }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit Jabatan --}}
                <div class="form-group">
                    <label for="title">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Judul" value="{{ $sambutan->jabatan }}">
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