@extends('layouts.app')


<div class="container">
        <h1>Tambah ijin</h1>
        <form action="{{ route('ijin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="keterangan">keterangan:</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

