@section('title','Pengguna | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')


<link rel="stylesheet" href="{{asset('c.css')}}" />
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title">Data Pengguna</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div>
        <th>
          <a href="{{ route('pengembangan.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('pengembangan.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>nama</th>
            <th>pendidikan terakhir</th>
            <th>pengembangan_diri</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pengembangan as $item)
          <tr>
            <td>{{ $item->id_pengembangan }}</td>
            <td>{{ $item->pegawai->nama}}</td>
            <td>{{ $item->pendidikan->pendidikan_terakhir}}</td>
            <td>{{ $item->pengembangan_diri }}</td>
            <td>
              <a href="{{ route('pengembangan.edit', $item->id_pengembangan) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('pengembangan.show', $item->id_pengembangan) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('pengembangan.destroy', $item->id_pengembangan) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
