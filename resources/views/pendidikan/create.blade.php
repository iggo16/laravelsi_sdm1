@extends('layouts.app')


<div class="container">
        <h1>Tambah pendidikan</h1>
        <form action="{{ route('pendidikan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pendidikan_terakhir">pendidikan_terakhir:</label>
                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
            </div>
            <div style="margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

