@extends('layouts.app')

@section('title', 'Tambah Fasilitas')

@section('content')
    

    <div class="container">
        <a href="{{route('fasilitas.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('fasilitas.store')}}" method="POST" enctype="multipart/form-data">
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
                {{-- Form Input jumlah --}}
                <div class="form-group">
                    <label for="jumlah">Total Fasilitas</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Fasilitas">
                </div>
                @error('jumlah')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input konten --}}
                <div class="form-group">
                    <label for="konten">Deskripsi</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="konten" name="konten" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                @error('konten')
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