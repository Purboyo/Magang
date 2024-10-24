@extends('layouts.app')

@section('title', 'Edit Data Tambahan PPDB')

@section('content')
    <div class="container">
        <a href="{{ route('addppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('addppdb.update', $addppdb->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Combo box untuk ikon dengan pencarian dan pratinjau --}}
                    <div class="form-group mb-3">
                        <label for="ikon" class="form-label">Ikon FontAwesome</label>
                        <select class="form-control ikon-select" id="ikon" name="ikon">
                            <option value="fa-graduation-cap" data-icon="fa fa-graduation-cap" @if($addppdb->ikon === 'fa-graduation-cap') selected @endif>Graduation Cap</option>
                            <option value="fa-chalkboard-teacher" data-icon="fa fa-chalkboard-teacher" @if($addppdb->ikon === 'fa-chalkboard-teacher') selected @endif>Chalkboard Teacher</option>
                            <option value="fa-school" data-icon="fa fa-school" @if($addppdb->ikon === 'fa-school') selected @endif>School</option>
                            <option value="fa-book" data-icon="fa fa-book" @if($addppdb->ikon === 'fa-book') selected @endif>Book</option>
                            <option value="fa-user-graduate" data-icon="fa fa-user-graduate" @if($addppdb->ikon === 'fa-user-graduate') selected @endif>User Graduate</option>
                            <option value="fa-laptop" data-icon="fa fa-laptop" @if($addppdb->ikon === 'fa-laptop') selected @endif>Laptop</option>
                            <option value="fa-apple-alt" data-icon="fa fa-apple-alt" @if($addppdb->ikon === 'fa-apple-alt') selected @endif>Apple (Education)</option>
                            <option value="fa-book-open" data-icon="fa fa-book-open" @if($addppdb->ikon === 'fa-book-open') selected @endif>Book Open</option>
                            <option value="fa-pencil-alt" data-icon="fa fa-pencil-alt" @if($addppdb->ikon === 'fa-pencil-alt') selected @endif>Pencil</option>
                            <option value="fa-clipboard" data-icon="fa fa-clipboard" @if($addppdb->ikon === 'fa-clipboard') selected @endif>Clipboard</option>
                            <option value="fa-users" data-icon="fa fa-users" @if($addppdb->ikon === 'fa-users') selected @endif>Users</option>
                            <option value="fa-bell" data-icon="fa fa-bell" @if($addppdb->ikon === 'fa-bell') selected @endif>Bell</option>
                            <option value="fa-star" data-icon="fa fa-star" @if($addppdb->ikon === 'fa-star') selected @endif>Star</option>
                            <option value="fa-award" data-icon="fa fa-award" @if($addppdb->ikon === 'fa-award') selected @endif>Award</option>
                            <option value="fa-comments" data-icon="fa fa-comments" @if($addppdb->ikon === 'fa-comments') selected @endif>Comments</option>
                            <option value="fa-chart-line" data-icon="fa fa-chart-line" @if($addppdb->ikon === 'fa-chart-line') selected @endif>Chart Line</option>
                        </select>
                        
                        @error('ikon')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input untuk Judul --}}
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $addppdb->title) }}">
                        @error('title')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Input untuk Deskripsi --}}
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $addppdb->description) }}</textarea>
                        @error('description')
                        <small style="color: red">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Tombol Submit --}}
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
