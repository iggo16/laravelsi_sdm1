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
          <a href="{{ route('absensi.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('absensi.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
                      <th>jam Masuk</th>
                      <th>jam istirahat</th>
                      <th>tanggal kerja</th>
                      <th>opsi</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach($absensi as $item)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->pegawai->nama }}</td>
            <td>{{ $item->jam_masuk }}</td>
            <td>{{ $item->jam_istirahat }}</td>
            <td>{{ $item->tanggal_kerja }}</td>
            <td>
              <a href="{{ route('absensi.edit', $item->id_absensi) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('absensi.show', $item->id_absensi) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('absensi.destroy', $item->id_absensi) }}" method="POST" class="d-inline">
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
