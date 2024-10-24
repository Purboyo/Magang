@extends('layouts.app')

@section('title', 'Tambah PPDB')

@section('content')
    <div class="container">
        <a href="{{ route('listppdb.index') }}" class="btn btn-success mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('listppdb.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Container untuk Form Input --}}
                    <div id="formContainer">
                        {{-- Form Input List Pertama --}}
                        <div class="form-group mb-3">
                            <label for="list" class="form-label">List</label>
                            <input type="text" class="form-control" name="list[]" id="list[]" placeholder="Masukkan List">
                            @error('list')
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
        document.getElementById('addFormButton').addEventListener('click', function() {
            // Mendapatkan container form
            var formContainer = document.getElementById('formContainer');

            // Membuat elemen baru untuk input list
            var newFormGroup = document.createElement('div');
            newFormGroup.classList.add('form-group', 'mb-3');

            var label = document.createElement('label');
            label.classList.add('form-label');
            label.textContent = 'List';

            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.setAttribute('name', 'list[]');
            input.setAttribute('placeholder', 'Masukkan List');
            input.setAttribute('required', true);

            // Menyusun elemen baru ke dalam form group
            newFormGroup.appendChild(label);
            newFormGroup.appendChild(input);

            // Menambahkan form group baru ke dalam formContainer
            formContainer.appendChild(newFormGroup);
        });
    </script>
@endsection
