@extends('layouts.app')

@section('title', 'Edit Sejarah')

@section('content')
    

    <div class="container">
        <a href="{{ route('sejarah.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('sejarah.update', $sejarah->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit gambar --}}
                <img src="/image/sejarah/{{ $sejarah->foto }}" class="img-fluid" width="250"></imf>
                <div class="form-group">
                    <label for="foto">Gambar</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <p>Masukan file dengan format webfig,jpg,jepg!</p>
                </div>
                @error('foto')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit deskripsi --}}
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi"  >{{ $sejarah->deskripsi }}</textarea>
                </div>
                @error('deskripsi')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit sejarahsingkat --}}
                <div class="form-group">
                    <label for="sejarahsingkat">Sejarah Singkat</label>
                    <textarea type="text" class="form-control" id="sejarahsingkat" name="sejarahsingkat" placeholder="Masukkan sejarahsingkat"  >{{ $sejarah->sejarahsingkat }}</textarea>
                </div>
                @error('sejarahsingkat')
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