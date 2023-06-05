
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data absensi</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID absensi</th>
                    <td>{{ $absensi->id_absensi }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $absensi->jam_masuk}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $absensi->jam_istirahat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kerja</th>
                    <td>{{ $absensi->tanggal_kerja }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('absensi.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
