@extends('layouts.app')

@section('title', 'Tambah Sambutan')

@section('content')
    

    <div class="container">
        <a href="{{route('sambutan.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sambutan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="title">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('gambar')
                <small style="color: red">{{ $message }}</small>
                @enderror                
                {{-- Form Input Konten --}}
                <div class="form-group">
                    <label for="title">Konten</label>
                    <textarea class="form-control" cols="30" rows="10" id="konten" name="konten" placeholder="Masukkan Konten"></textarea>
                </div>
                @error('konten')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Nama --}}
                <div class="form-group">
                    <label for="title">Nama Kepala Sekolah</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Kepala Sekolah">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Jabatan --}}
                <div class="form-group">
                    <label for="title">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan">
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