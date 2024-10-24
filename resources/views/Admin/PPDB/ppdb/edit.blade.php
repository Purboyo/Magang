@extends('layouts.app')

@section('title', 'Edit PPDB')

@section('content')
    

    <div class="container">
        <a href="{{ route('ppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('ppdb.update', $ppdb->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/ppdb/{{ $ppdb->image }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')
                    <small style="color: red">{{ $message }}</small>
                    @enderror                
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                {{-- edit Judul --}}
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="{{ $ppdb->title }}">
                    @error('title')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                {{-- edit Konten --}}
                <div class="form-group">
                    <label for="subtitle">Konten</label>
                    <textarea class="form-control" cols="30" rows="10" id="subtitle" name="subtitle" placeholder="Masukkan Konten" >{{ $ppdb->subtitle }}</textarea>
                    @error('subtitle')
                    <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
       </div>
    </div>

@endsection