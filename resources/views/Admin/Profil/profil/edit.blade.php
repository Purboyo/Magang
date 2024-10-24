@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')
<div class="container mt-2">
    <h2>Edit Profil</h2>


    <form action="{{ route('profil.update', $profil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $profil->judul }}" required>
            @error('judul')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subjudul" class="form-label">Subjudul</label>
            <input type="text" class="form-control" id="subjudul" name="subjudul" value="{{ $profil->subjudul }}" required>
            @error('subjudul')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sejarahsingkat" class="form-label">Sejarah Singkat</label>
            <textarea class="form-control" id="sejarahsingkat" name="sejarahsingkat" required>{{ $profil->sejarahsingkat }}</textarea>
            @error('sejarahsingakat')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="list1" class="form-label">Program 1</label>
            <input type="text" class="form-control" id="list1" name="list1" value="{{ $profil->list1 }}" required>
            @error('list1')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="list2" class="form-label">Program 2</label>
            <input type="text" class="form-control" id="list2" name="list2" value="{{ $profil->list2 }}" required>
            @error('list2')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="list3" class="form-label">Program 3</label>
            <input type="text" class="form-control" id="list3" name="list3" value="{{ $profil->list3 }}" required>
            @error('list2')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="penutup" class="form-label">Penutup</label>
            <textarea class="form-control" id="penutup" name="penutup" required>{{ $profil->penutup }}</textarea>
            @error('penutup')
            <small style="color: red">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Profil</button>
    </form>
</div>
@endsection
