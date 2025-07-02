@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <a href="{{ route('mahasiswa.index') }}" class="button">🔙 Kembali</a>
@endsection
