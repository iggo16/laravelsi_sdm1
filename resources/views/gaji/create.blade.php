@extends('layouts.app')


<div class="container">
        <h1>Tambah gaji</h1>
        <form action="{{ route('gaji.store') }}" method="POST">
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
                <label for="nama">jumlah tunjangan:</label>
                <select class="form-control select2" style="width: 22%;" name="tunjangan_id" id="tunjangan_id">
                    <option disabled value>Pilih Pegawai</option>
                    @foreach($tj as $item)
                    <option value="{{$item->id_tunjangan}}">{{$item->jumlah_tunjangan}}</option>
                    @endforeach
                    <div>
                        @csrf
            <div class="form-group">
                <label for="jumlah_gaji">jumlah_gaji:</label>
                <input type="text" class="form-control" id="jumlah_gaji" name="jumlah_gaji" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="total_gaji">total_gaji:</label>
                <input type="text" class="form-control" id="total_gaji" name="total_gaji" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_gaji">tanggal_gaji:</label>
                <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

