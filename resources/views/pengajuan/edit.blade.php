
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit pengajuan</h1>
        <form action="{{ route('pengajuan.update', $pengajuan->id_pengajuan) }}" method="POST">
            <div class="form-group">
                <label for="nama">nama</label>
                <select class="form-control select2" style="width:22%;" name="pegawai_id" id="pegawai_id">
                <option value="{{ $pengajuan->pegawai_id }}">{{$pengajuan->pegawai->nama}}</option>
                @foreach($peg as $item)
                    <option value="{{$item->id_pegawai}}">{{$item->nama}}</option>
                    @endforeach
                </select>
              </div>  
            @csrf
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="nama">keterangan ijin</label>
                <select class="form-control select2" style="width:22%;" name="ijin_id" id="ijin_id">
                <option value="{{ $pengajuan->ijin_id }}">{{$pengajuan->ijin->keterangan}}</option>
                @foreach($ij as $item)
                    <option value="{{$item->id_ijin}}">{{$item->keterangan}}</option>
                    @endforeach
                </select>
              </div>
            @method('PUT')
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_mulai">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ date('Y-m-d', strtotime($pengajuan->tanggal_mulai)) }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_selesai">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ date('Y-m-d', strtotime($pengajuan->tanggal_selesai)) }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
