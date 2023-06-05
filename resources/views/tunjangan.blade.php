@section('title','Tunjangan | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Tunjangan Pegawai</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_tunjangan</th>
                      <th>jenis_tunjangan</th>
                      <th>jumlah_tunjangan</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>T077</th>
                      <th>keluarga</th>
                      <th>2000000</th>
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