@section('title','Gaji | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Gaji Pegawai</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_gaji</th>
                      <th>jumlah gaji</th>
                      <th>tanggal gaji</th>
                      <th>tunjangan</th>
                      <th>total gaji</th>
                      <th>id_tunjangan</th>
                      <th>id_pegawai</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>G077</th>
                      <th>3000000</th>
                      <th>01-01-2023</th>
                      <th>2000000</th>
                      <th>5000000</th>
                      <th>T077</th>
                      <th>P077</th>
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