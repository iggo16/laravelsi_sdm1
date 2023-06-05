@extends('layouts.app')


<div class="container">
        <h1>Tambah tunjangan</h1>
        <form action="{{ route('tunjangan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jenis_tunjangan">jenis_tunjangan</label>
                <input type="text" class="form-control" id="jenis_tunjangan" name="jenis_tunjangan" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <div class="form-group">
                <label for="jumlah_tunjangan">jumlah_tunjangan:</label>
                <input type="text" class="form-control" id="jumlah_tunjangan" name="jumlah_tunjangan" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

