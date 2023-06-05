
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data pengajuan</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID pengajuan</th>
                    <td>{{ $pengajuan->id_pengajuan }}</td>
                </tr>
                <tr>
                    <th>Tanggal mulai</th>
                    <td>{{ $pengajuan->tanggal_mulai }}</td>
                </tr>
                <tr>
                    <th>Tanggal selesai</th>
                    <td>{{ $pengajuan->tanggal_selesai }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
