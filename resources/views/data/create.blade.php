@extends('layout')

@section('content')
    <h2>Tambah Data Peminjaman</h2>

    <form action="{{ route('data.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Kode Pinjam</label>
            <input type="text" name="KdPinjam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Peminjam</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kode" class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Kode Buku</label>
            <input type="text" name="KdBuku" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tglPinjam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tglKembali" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('data.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
