@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="form-group">
            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $mahasiswa->email }}" required>
        </div>
        <button type="submit">💾 Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="button">🔙 Kembali</a>
    </form>
@endsection
