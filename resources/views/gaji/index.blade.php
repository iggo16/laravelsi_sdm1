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
          <a href="{{ route('gaji.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('gaji.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>jumlah Gaji</th>
            <th>Total Gaji</th>
            <th>Tanggal Gaji</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach($gaji as $item)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->pegawai->nama}}</td>
            <td>{{ $item->tunjangan->jumlah_tunjangan}}</td>
            <td>{{ $item->jumlah_gaji }}</td>
            <td>{{ $item->total_gaji }}</td>
            <td>{{ $item->tanggal_gaji }}</td>
            <td>
              <a href="{{ route('gaji.edit', $item->id_gaji) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('gaji.show', $item->id_gaji) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('gaji.destroy', $item->id_gaji) }}" method="POST" class="d-inline">
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
