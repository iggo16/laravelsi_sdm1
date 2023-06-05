@section('title','Jenis Ijin | PT.Perikanan Nusantara')
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')
@include('layouts.footer')

<link rel="stylesheet" href="{{asset('c.css')}}" />
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                <h1 class="card-title">Jenis Ijin</h1>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div>
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_ijin</th>
                      <th>sakit</th>
                      <th>ijin</th>
                      <th>tanpa keterangan</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>I077</th>
                    <th> - </th>
                    <th> - </th>
                    <th> - </th>
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