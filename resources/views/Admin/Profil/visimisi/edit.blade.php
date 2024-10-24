@extends('layouts.app')

@section('title', 'Edit Visi')

@section('content')
<div class="container">
    <a href="{{ route('visimisi.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="m-0">Edit Visi</h5>
            </div>
            <div class="card-body">
                <form action="{{route('visimisi.update', $visi->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Edit Visi -->
                    <div class="form-group">
                        <label for="visi" class="form-label">Visi</label>
                        <input type="text" class="form-control" id="visi" name="visi" placeholder="Masukkan Visi" value="{{ $visi->visi }}">
                        @error('visi')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Perubahan</button>
                        {{-- <a href="{{ route('visimisi.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
