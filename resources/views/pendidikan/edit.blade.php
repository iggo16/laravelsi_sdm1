
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit pendidikan</h1>
        <form action="{{ route('pendidikan.update', $pendidikan->id_pendidikan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pendidikan_terakhir">pendidikan_terakhir:</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ $pendidikan->pendidikan_terakhir }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
