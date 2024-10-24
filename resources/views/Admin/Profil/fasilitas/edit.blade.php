@extends('layouts.app')

@section('title', 'Edit Fasilitas')

@section('content')
    

    <div class="container">
        <a href="{{ route('fasilitas.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('fasilitas.update', $fasilita->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/fasilitas/{{ $fasilita->image }}" class="img-fluid" width="250"></imf>
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
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $fasilita->nama }}">
                </div>
                @error('nama')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit jumlah --}}
                <div class="form-group">
                    <label for="jumlah">Total</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Total" value="{{ $fasilita->jumlah }}">
                </div>
                @error('jumlah')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- edit konten --}}
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea type="text" class="form-control" id="konten" name="konten" placeholder="Masukkan Konten"  >{{ $fasilita->konten }}</textarea>
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