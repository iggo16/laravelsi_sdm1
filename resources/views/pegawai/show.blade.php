
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data Pegawai</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID Pegawai</th>
                    <td>{{ $pegawai->id_pegawai }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $pegawai->nama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pegawai->alamat }}</td>
                </tr>
                <tr>
                    <th>No. HP</th>
                    <td>{{ $pegawai->no_hp }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $pegawai->tanggal_lahir }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
