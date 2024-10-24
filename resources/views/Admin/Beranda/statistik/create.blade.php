@extends('layouts.app')

@section('title', 'Tambah statistik')

@section('content')
    

    <div class="container">
        <a href="{{route('statistik.index')}}" class="btn btn-success mb-3">Kembali</a>
       <div class="row">
        <div class="col-md-12">
            <form action="{{route('statistik.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form Input Jumlah Siswa --}}
                <div class="form-group">
                    <label for="siswa">Jumlah Siswa</label>
                    <input type="number" class="form-control" id="siswa" name="siswa" placeholder="Masukkan Jumlah Siswa">
                </div>
                @error('siswa')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Jumlah Guru --}}
                <div class="form-group">
                    <label for="guru">Jumlah Guru</label>
                    <input type="number" class="form-control" id="guru" name="guru" placeholder="Masukkan Jumlah Guru">
                </div>
                @error('guru')
                <small style="color: red">{{ $message }}</small>
                @enderror
                {{-- Form Input Jumlah Karyawan --}}
                <div class="form-group">
                    <label for="karyawan">Jumlah Karyawan</label>
                    <input type="number" class="form-control" id="karyawan" name="karyawan" placeholder="Masukkan Jumlah Karyawan">
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