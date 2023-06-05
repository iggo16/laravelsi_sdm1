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
          <a href="{{ route('pegawai.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('pegawai.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. HP</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pegawai as $item)
          <tr>
            <td>{{ $item->id_pegawai }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>
              <a href="{{ route('pegawai.edit', $item->id_pegawai) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('pegawai.show', $item->id_pegawai) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('pegawai.destroy', $item->id_pegawai) }}" method="POST" class="d-inline">
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
