@section('title','Pengguna | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')


<link rel="stylesheet" href="{{asset('c.css')}}" />
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h1 class="card-title">Data ijin</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div>
        <th>
          <a href="{{ route('ijin.create') }}"><button class="add-button">Tambah Data</button></a>
          <a href="{{ route('ijin.printPDF') }}" > <button class="add-button"target="_blank">Cetak PDF</button></a>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID ijin</th>
            <th>keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($ijin as $item)
          <tr>
            <td>{{ $item->id_ijin }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>
              <a href="{{ route('ijin.edit', $item->id_ijin) }}"><button class="edit-button">Edit</button></a>
              <a href="{{ route('ijin.show', $item->id_ijin) }}"><button class="edit-button">Lihat</button></a>
              <form action="{{ route('ijin.destroy', $item->id_ijin) }}" method="POST" class="d-inline">
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
