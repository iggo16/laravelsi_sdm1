@section('title','Pendidikan | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Riwayat Pendidikan</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_pendidikan</th>
                      <th>pendidikan Terakhir</th>
                      <th>id_pegawai</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>PEN077</th>
                      <th>SMA</th>
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