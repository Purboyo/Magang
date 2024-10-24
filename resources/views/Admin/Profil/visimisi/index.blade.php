@extends('layouts.app')

@section('title', 'Visi dan Misi')

@section('content')
<div class="container mt-2">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <strong>Berhasil</strong>
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <!-- Section for Visi -->
                    <h5 class="text-bold">Visi:</h5>
                    @foreach ($visis as $visi)
                    <p>{{ $visi->visi }}</p>
                        <div class="mt-4">
                        <a href="{{ route('visimisi.edit', $visi->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Visi
                        </a>
                    </div>
                    @endforeach

                    <!-- Section for Misi -->
                    <h5 class="text-bold mt-4">Misi:</h5>
                    @foreach ($misi as $m)
                        <p>- {{ $m->misi }}</p>
                    @endforeach
                    <div class="mt-4">
                        <a href="{{ route('visimisi.create') }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit Misi
                        </a>
                    </div>
                </div>
            </div>
@endsection
