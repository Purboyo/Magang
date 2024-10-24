@extends('layouts.app')

@section('title', 'Edit Statistik')

@section('content')
    

    <div class="container">
        <a href="{{ route('statistik.index') }}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('statistik.update', $statistik->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                {{-- edit Siswa --}}
                <div class="form-group">
                    <label for="siswa">Siswa</label>
                    <input type="text" class="form-control" id="siswa" name="siswa" placeholder="Masukkan Judul" value="{{ $statistik->siswa }}">
                </div>
                @error('siswa')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit Guru --}}
                <div class="form-group">
                    <label for="guru">Guru</label>
                    <input type="text" class="form-control" id="guru" name="guru" placeholder="Masukkan Judul" value="{{ $statistik->guru }}">
                </div>
                @error('guru')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- edit Karyawan --}}
                <div class="form-group">
                    <label for="karyawan">Karyawan</label>
                    <input type="text" class="form-control" id="karyawan" name="karyawan" placeholder="Masukkan Judul" value="{{ $statistik->karyawan }}">
                </div>
                @error('karyawan')
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