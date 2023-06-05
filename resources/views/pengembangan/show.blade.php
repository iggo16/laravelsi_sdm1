
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data pengembangan</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID pengembangan</th>
                    <td>{{ $pengembangan->id_pengembangan }}</td>
                </tr>
                <tr>
                    <th>pengembangan_diri</th>
                    <td>{{ $pengembangan->pengembangan_diri }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pengembangan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
