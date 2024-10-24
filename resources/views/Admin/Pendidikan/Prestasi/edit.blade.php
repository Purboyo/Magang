@extends('layouts.app')

@section('title', 'Edit Prestasi')

@section('content')
    

    <div class="container">
        <a href="{{ route('Prestasi.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('Prestasi.update', $Prestasi->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/prestasi/{{ $Prestasi->image }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('image')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit title --}}
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan title" value="{{ $Prestasi->title }}">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror

                {{-- edit deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi"  cols="30" rows="10">{{ $Prestasi->deskripsi }}</textarea>
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