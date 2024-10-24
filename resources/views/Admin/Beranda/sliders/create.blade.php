@extends('layouts.app')

@section('title', 'Tambah Slider')

@section('content')
    

    <div class="container">
        <a href="{{route('sliders.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Judul --}}
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
                </div>
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Deskripsi --}}
                <div class="form-group">
                    <label for="title">Deskripsi</label>
                    <textarea class="form-control" cols="30" rows="10" id="description" name="description" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Gambar --}}
                <div class="form-group">
                    <label for="title">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('image')
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