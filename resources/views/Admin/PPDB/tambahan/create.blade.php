@extends('layouts.app')

@section('title', 'Tambah data tambahan')

@section('content')
    <div class="container">
        <a href="{{ route('addppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
        <form action="{{ route('addppdb.store') }}" method="POST">
            @csrf

            {{-- Combo box untuk ikon dengan pencarian dan pratinjau --}}
            <div class="form-group mb-3">
                <label for="ikon" class="form-label">Ikon FontAwesome</label>
                <select class="form-control ikon-select" id="ikon" name="ikon">
                    <option value="fa-graduation-cap" data-icon="fa fa-graduation-cap">Graduation Cap</option>
                    <option value="fa-chalkboard-teacher" data-icon="fa fa-chalkboard-teacher">Chalkboard Teacher</option>
                    <option value="fa-school" data-icon="fa fa-school">School</option>
                    <option value="fa-book" data-icon="fa fa-book">Book</option>
                    <option value="fa-user-graduate" data-icon="fa fa-user-graduate">User Graduate</option>
                    <option value="fa-laptop" data-icon="fa fa-laptop">Laptop</option>
                    <option value="fa-apple-alt" data-icon="fa fa-apple-alt">Apple (Education)</option>
                    <option value="fa-book-open" data-icon="fa fa-book-open">Book Open</option>
                    <option value="fa-pencil-alt" data-icon="fa fa-pencil-alt">Pencil</option>
                    <option value="fa-clipboard" data-icon="fa fa-clipboard">Clipboard</option>
                    <option value="fa-users" data-icon="fa fa-users">Users</option>
                    <option value="fa-bell" data-icon="fa fa-bell">Bell</option>
                    <option value="fa-star" data-icon="fa fa-star">Star</option>
                    <option value="fa-award" data-icon="fa fa-award">Award</option>
                    <option value="fa-comments" data-icon="fa fa-comments">Comments</option>
                    <option value="fa-chart-line" data-icon="fa fa-chart-line">Chart Line</option>
                </select>
                @error('ikon')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Input untuk Judul --}}
            <div class="form-group mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="{{ old('title') }}">
                @error('title')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Input untuk Deskripsi --}}
            <div class="form-group mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukkan Deskripsi">{{ old('description') }}</textarea>
                @error('description')
                <small style="color: red">{{ $message }}</small>
                @enderror
            </div>

            {{-- Tombol Submit --}}
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
