@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Peminjaman</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('data.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="KdPinjam" class="form-label">Kode Pinjaman</label>
            <input type="text" name="KdPinjam" class="form-control" value="{{ old('KdPinjam', $data->KdPinjam) }}" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Peminjam</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $data->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $data->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="KdBuku" class="form-label">Kode Buku</label>
            <input type="text" step="0.01" name="KdBuku" class="form-control" value="{{ old('KdBuku', $data->KdBuku) }}" required>
        </div>

        <div class="mb-3">
            <label for="tglPinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tglPinjam" class="form-control" value="{{ old('tglPinjam', $data->tglPinjam) }}" required>
        </div>

         <div class="mb-3">
            <label for="tglKembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tglKembali" class="form-control" value="{{ old('tglKembali', $data->tglKembali) }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" step="0.01" name="status" class="form-control" value="{{ old('status', $data->status) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
