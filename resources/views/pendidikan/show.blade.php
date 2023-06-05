
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data pendidikan</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID pendidikan</th>
                    <td>{{ $pendidikan->id_pendidikan }}</td>
                </tr>
                <tr>
                    <th>pendidikan_terakhir</th>
                    <td>{{ $pendidikan->pendidikan_terakhir }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('pendidikan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
