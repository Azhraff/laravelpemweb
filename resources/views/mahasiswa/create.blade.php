@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" required>
        </div>
        <div class="form-group">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">💾 Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="button">🔙 Kembali</a>
    </form>
@endsection
