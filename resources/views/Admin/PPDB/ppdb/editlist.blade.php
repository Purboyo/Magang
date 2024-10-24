@extends('layouts.app')

@section('title', 'Edit List')

@section('content')
    <div class="container">
        <a href="{{ route('listppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('listppdb.update', $listppdb->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Container untuk Form Input --}}
                    <div class="form-group mb-3">
                        <label for="list" class="form-label">List</label>
                        <input type="text" class="form-control" name="list" value="{{ old('list', $listppdb->list) }}" placeholder="Masukkan List" required>
                        @error('list')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Tombol Submit --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
