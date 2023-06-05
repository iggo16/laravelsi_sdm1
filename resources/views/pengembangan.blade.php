@section('title','Pengembnagan | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Data Pengembangan</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_pengembangan</th>
                      <th>jenis pengembangan</th>
                      <th>id_pegawai</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <th>PNGM077</th>
                      <th> - </th>
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