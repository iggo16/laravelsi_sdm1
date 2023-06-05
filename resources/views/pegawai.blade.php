@section('title','Pegawai | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Pegawai</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><a href="/pegawai/tambah"><button class="add-button">Tambah Data</button> </th></a>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>id_pegawai</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>no_hp</th>
                        <th>tanggal lahir</th>
                        <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody> 
                  <tr>
                    <th>P077</th>
                    <th>Abdul Wahid</th>
                    <th>Probolinggo</th>
                    <th>085330765567</th>
                    <th>16-06-2000</th>
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