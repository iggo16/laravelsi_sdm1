@extends('layouts.app')


<div class="container">
        <h1>Tambah pengembangan</h1>
        <form action="{{ route('pengembangan.store') }}" method="POST">
            <div class="form-group">
                <label for="nama">nama :</label>
                <select class="form-control select2" style="width: 22%;" name="pegawai_id" id="pegawai_id">
                    <option disabled value>Pilih Pegawai</option>
                    @foreach($peg as $item)
                    <option value="{{$item->id_pegawai}}">{{$item->nama}}</option>
                    @endforeach      
        <div>
             
            @csrf
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="nama">pendidikan terakhir:</label>
                <select class="form-control select2" style="width: 22%;" name="pendidikan_id" id="pendidikan_id">
                    <option disabled value>Pilih</option>
                    @foreach($pd as $item)
                    <option value="{{$item->id_pendidikan}}">{{$item->pendidikan_terakhir}}</option>
                    @endforeach
                    <div>
                        <div style="margin-bottom: 20px;"></div>
                        @csrf
                        <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="pengembangan_diri">pengembangan_diri:</label>
                <input type="text" class="form-control" id="pengembangan_diri" name="pengembangan_diri" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

