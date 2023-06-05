
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data gaji</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID gaji</th>
                    <td>{{ $gaji->id_gaji }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $gaji->jumlah_gaji }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $gaji->tunjangan }}</td>
                </tr>
                <tr>
                    <th>No. HP</th>
                    <td>{{ $gaji->total_gaji }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $gaji->tanggal_gaji }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('gaji.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
