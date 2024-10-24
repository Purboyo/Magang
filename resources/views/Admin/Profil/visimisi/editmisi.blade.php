@extends('layouts.app')

@section('title', 'Edit Misi')

@section('content')
<div class="container">
    <a href="{{ route('visimisi.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="m-0">Edit Misi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('visimisi.store') }}" method="POST">
                    @csrf
                    <!-- Menampilkan form untuk setiap misi -->
                    @foreach ($misi as $m)
                    <div class="form-group">
                        <label for="misi[{{ $m->id }}]">Misi {{ $loop->index + 1 }}:</label>
                        <input type="text" class="form-control" id="misi[{{ $m->id }}]" name="misi[{{ $m->id }}]" value="{{ $m->misi }}" required>
                        @error('misi.' . $m->id)
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>
                    @endforeach

                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
