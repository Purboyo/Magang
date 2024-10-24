@extends('layouts.app')

@section('title', 'Tambah P5RA')

@section('content')
    

    <div class="container">
        <a href="{{route('P5ra.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('P5ra.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('gambar')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input judul --}}
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Prestasi">
                </div>
                @error('judul')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                @error('deskripsi')
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