@extends('layouts.app')

@section('title', 'Tambah PPDB')

@section('content')
    <div class="container">
        <a href="{{ route('ppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Container untuk Form Judul --}}
                    <div id="formContainer">
                        {{-- Form Input Judul Pertama --}}
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
                            @error('title')
                            <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- Tombol Tambah Form --}}
                    <button type="button" class="btn btn-primary mb-3" id="addFormButton">Tambah Form</button>

                    {{-- Tombol Submit --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menambah form input judul
        document.getElementById('addFormButton').addEventListener('click', function() {
            // Membuat elemen baru untuk input judul
            var newFormGroup = document.createElement('div');
            newFormGroup.classList.add('form-group');

            var label = document.createElement('label');
            label.setAttribute('for', 'title');
            label.textContent = 'Judul';

            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.setAttribute('name', 'title[]');
            input.setAttribute('placeholder', 'Masukkan Judul');

            // Menyusun elemen baru ke dalam form group
            newFormGroup.appendChild(label);
            newFormGroup.appendChild(input);

            // Menambahkan form group baru ke dalam formContainer
            document.getElementById('formContainer').appendChild(newFormGroup);
        });
    </script>
@endsection
