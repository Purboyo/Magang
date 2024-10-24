@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

    <div class="container">
        <a href="{{ route('sliders.create') }}" class="btn btn-success mb-3">
            <i class="fa fa-plus"></i> Tambah Data
        </a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Berhasil!</strong>
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Kartu untuk Menampilkan Slider --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($sliders as $slider)
                <div class="col mb-4" data-aos="fade-up">
                    <div class="card shadow-sm">
                        <img src="{{ asset('image/' . $slider->image) }}" alt="{{ $slider->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $slider->title }}</h5>
                            <p class="card-text">{{ Str::limit($slider->description, 70) }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
