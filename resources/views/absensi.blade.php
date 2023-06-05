@section('title','Absensi | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Absensi</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <th><a href="/Absensi/tambah"><button class="add-button">Tambah Data</button> </th></a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id absensi</th>
                      <th>jam Masuk</th>
                      <th>tanggal kerja</th>
                      <th>jam istirahat</th>
                      <th>ijin</th>
                      <th>id pegawai</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>A077</th>
                      <th>07:00</th>
                      <th>01-01-2023</th>
                      <th>12:00</th>
                      <th>tidak</th>
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