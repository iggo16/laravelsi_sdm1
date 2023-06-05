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
          <a href="{{ route('tunjangan.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('tunjangan.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>jenis_tunjangan</th>
            <th>jumlah_tunjangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tunjangan as $item)
          <tr>
            <td>{{ $item->id_tunjangan }}</td>
            <td>{{ $item->jenis_tunjangan }}</td>
            <td>{{ $item->jumlah_tunjangan }}</td>
            <td>
              <a href="{{ route('tunjangan.edit', $item->id_tunjangan) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('tunjangan.show', $item->id_tunjangan) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('tunjangan.destroy', $item->id_tunjangan) }}" method="POST" class="d-inline">
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
