@extends('layouts.app')


<div class="container">
        <h1>Tambah pegawai</h1>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="no_hp">No. HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

