@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="button">➕ Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswas as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->email }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="button">✏️ Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin ingin menghapus?')">🗑 Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
