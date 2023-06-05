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
          <a href="{{ route('pendidikan.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('pendidikan.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>pendidikan_terakhir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pendidikan as $item)
          <tr>
            <td>{{ $item->id_pendidikan }}</td>
            <td>{{ $item->pendidikan_terakhir }}</td>
            <td>
              <a href="{{ route('pendidikan.edit', $item->id_pendidikan) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('pendidikan.show', $item->id_pendidikan) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('pendidikan.destroy', $item->id_pendidikan) }}" method="POST" class="d-inline">
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
