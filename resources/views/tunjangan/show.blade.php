
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data tunjangan</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID tunjangan</th>
                    <td>{{ $tunjangan->id_tunjangan }}</td>
                </tr>
                <tr>
                    <th>jenis_tunjangan</th>
                    <td>{{ $tunjangan->jenis_tunjangan }}</td>
                </tr>
                <tr>
                    <th>jumlah_tunjangan</th>
                    <td>{{ $tunjangan->jumlah_tunjangan }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('tunjangan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
