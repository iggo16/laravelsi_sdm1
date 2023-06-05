
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit ijin</h1>
        <form action="{{ route('ijin.update', $ijin->id_ijin) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="keterangan">keterangan:</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $ijin->keterangan }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $ijin->alamat }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="no_hp">No. HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $ijin->no_hp }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ date('Y-m-d', strtotime($ijin->tanggal_lahir)) }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
