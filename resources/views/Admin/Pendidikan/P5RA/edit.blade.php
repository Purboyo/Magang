@extends('layouts.app')

@section('title', 'Edit P5RA')

@section('content')
    

    <div class="container">
        <a href="{{ route('P5ra.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('P5ra.update', $P5ra->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/P5ra/{{ $P5ra->gambar }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('gambar')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit judul --}}
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" value="{{ $P5ra->judul }}">
                </div>
                @error('judul')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- edit deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi"  cols="30" rows="10">{{ $P5ra->deskripsi }}</textarea>
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