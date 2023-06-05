@section('title','Pengjuan Ijin | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Pengajuan Ijin</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_pengajuan</th>
                      <th>ID Pegawai</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>id_Ijin</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>PNJ0077</th>
                    <th>P0077</th>
                    <th>02-02-2023</th>
                    <th>03-02-2023</th>
                    <th>I0077</th>
                    <td>
                      <button class="edit-button">Edit</button>
                      <button class="delete-button">Hapus</button> 
                    </td>
                  </tr>   
                </tbody>
              </table>
            </div>
        </div>
      </div>