
@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit pengembangan</h1>
        <form action="{{ route('pengembangan.update', $pengembangan->id_pengembangan) }}" method="POST">
            <div class="form-group">
                <label for="nama">nama</label>
                <select class="form-control select2" style="width:22%;" name="pegawai_id" id="pegawai_id">
                <option value="{{ $pengembangan->pegawai_id }}">{{$pengembangan->pegawai->nama}}</option>
                @foreach($peg as $item)
                    <option value="{{$item->id_pegawai}}">{{$item->nama}}</option>
                    @endforeach
                </select>
              </div>  
            @csrf
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="nama">pendidikan terakhir</label>
                <select class="form-control select2" style="width:22%;" name="pendidikan_id" id="pendidikan_id">
                <option value="{{ $pengembangan->pendidikan_id }}">{{$pengembangan->pendidikan->jumlah_pendidikan}}</option>
                @foreach($pd as $item)
                    <option value="{{$item->id_pendidikan}}">{{$item->pendidikan_terakhir}}</option>
                    @endforeach 
                </select>
              </div>
              <div style="margin-bottom: 20px;"></div>
            @csrf
            <div style="margin-bottom: 20px;"></div>
            @method('PUT')
            <div class="form-group">
                <label for="pengembangan_diri">pengembangan_diri:</label>
                <input type="text" class="form-control" id="pengembangan_diri" name="pengembangan_diri" value="{{ $pengembangan->pengembangan_diri }}" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
