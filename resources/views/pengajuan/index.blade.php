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
          <a href="{{ route('pengajuan.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('pengajuan.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Tanggal mulai</th>
            <th>Tanggal selesai</th>
            <th>Ijin</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1 @endphp
          @foreach($pengajuan as $item)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->pegawai->nama}}</td>
            <td>{{ $item->tanggal_mulai }}</td>
            <td>{{ $item->tanggal_selesai }}</td>
            <td>{{ $item->ijin->keterangan}}</td>
            <td>
              <a href="{{ route('pengajuan.edit', $item->id_pengajuan) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('pengajuan.show', $item->id_pengajuan) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('pengajuan.destroy', $item->id_pengajuan) }}" method="POST" class="d-inline">
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
