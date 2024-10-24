@extends('layouts.app')

@section('title', 'Data Deskripsi')

@section('content')
<div class="container">
    {{-- <a href="{{ route('deskripsi.create') }}" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Tambah Data</a> --}}

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach ($deskripsis as $deskripsi) <!-- Start of foreach loop -->
    <div class="row info-table mt-4">
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $deskripsi->nama }}</td> <!-- Corrected to use Blade syntax -->
            </tr>
            <tr>
                <th>NPSN</th>
                <td>{{ $deskripsi->npsn }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $deskripsi->alamat }}</td>
            </tr>
            <tr>
                <th>Desa</th>
                <td>{{ $deskripsi->desa }}</td>
            </tr>
            <tr>
                <th>Kecamatan/Kota</th>
                <td>{{ $deskripsi->kecamatan }} / {{ $deskripsi->kota }}</td>
            </tr>
            <tr>
                <th>Provinsi/Negara</th>
                <td>{{ $deskripsi->provinsi }} / {{ $deskripsi->negara }}</td>
            </tr>
            <tr>
                <th>Status Sekolah</th>
                <td>{{ $deskripsi->status }}</td>
            </tr>
            <tr>
                <th>Bentuk Pendidikan</th>
                <td>{{ $deskripsi->bentuk }}</td>
            </tr>
        </table>
        <a href="{{ route('deskripsi.edit', $deskripsi->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a> <!-- Edit button -->
    </div>
    @endforeach <!-- End of foreach loop -->
</div>
@endsection
