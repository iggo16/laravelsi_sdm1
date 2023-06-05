
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit absensi</h1>
        <form action="{{ route('absensi.update', $absensi->id_absensi) }}" method="POST">
            
            <div class="form-group">
                <label for="nama">nama</label>
                <select class="form-control select2" style="width:22%;" name="pegawai_id" id="pegawai_id">
                <option value="{{ $absensi->pegawai_id }}">{{$absensi->pegawai->nama}}</option>
                @foreach($peg as $item)
                    <option value="{{$item->id_pegawai}}">{{$item->nama}}</option>
                    @endforeach
                </select>
              </div>  
              <div style="margin-bottom: 20px;"></div>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="jam_masuk">jam_masuk:</label>
                <input type="text" class="form-control" id="jam_masuk" name="jam_masuk" value="{{ $absensi->jam_masuk }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="jam_istirahat">jam_istirahat:</label>
                <input type="text" class="form-control" id="jam_istirahat" name="jam_istirahat" value="{{ $absensi->jam_istirahat }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_kerja">tanggal kerja:</label>
                <input type="date" class="form-control" id="tanggal_kerja" name="tanggal_kerja" value="{{ date('Y-m-d', strtotime($absensi->tanggal_kerja)) }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
