
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Data ijin</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID ijin</th>
                    <td>{{ $ijin->id_ijin }}</td>
                </tr>
                <tr>
                    <th>keterangan</th>
                    <td>{{ $ijin->keterangan }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('ijin.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
