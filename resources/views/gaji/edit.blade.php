
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit gaji</h1>
        <form action="{{ route('gaji.update', $gaji->id_gaji) }}" method="POST">
                        <div class="form-group">
                <label for="nama">nama</label>
                <select class="form-control select2" style="width:22%;" name="pegawai_id" id="pegawai_id">
                <option value="{{ $gaji->pegawai_id }}">{{$gaji->pegawai->nama}}</option>
                @foreach($peg as $item)
                    <option value="{{$item->id_pegawai}}">{{$item->nama}}</option>
                    @endforeach
                </select>
              </div>  
            @csrf
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="nama">jumlah_tunjangan</label>
                <select class="form-control select2" style="width:22%;" name="tunjangan_id" id="tunjangan_id">
                <option value="{{ $gaji->tunjangan_id }}">{{$gaji->tunjangan->jumlah_tunjangan}}</option>
                @foreach($tj as $item)
                    <option value="{{$item->id_tunjangan}}">{{$item->jumlah_tunjangan}}</option>
                    @endforeach
                </select>
              </div>
              <div style="margin-bottom: 20px;"></div>
            @csrf
            <div style="margin-bottom: 20px;"></div>
            @method('PUT')
            <div class="form-group">
                <label for="jumlah_gaji">jumlah_gaji:</label>
                <input type="text" class="form-control" id="jumlah_gaji" name="jumlah_gaji" value="{{ $gaji->jumlah_gaji }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="total_gaji">total_gaji:</label>
                <input type="text" class="form-control" id="total_gaji" name="total_gaji" value="{{ $gaji->total_gaji }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_gaji">tanggal_gaji:</label>
                <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" value="{{ date('Y-m-d', strtotime($gaji->tanggal_gaji)) }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
