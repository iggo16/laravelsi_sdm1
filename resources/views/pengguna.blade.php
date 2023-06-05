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
                  <th><button class="add-button">Tambah Data</button> </th>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>id_pengguna</th>
                      <th>username</th>
                      <th>email</th>
                      <th>password</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    @foreach($users as $user)
                    <tr>
                      <td>Usr{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->password }}</td>
                      <td>
                        <button class="edit-button">Edit</button>
                        <button class="delete-button">Hapus</button>  
                      </td>
                    </tr>
                    @endforeach
                    </tr>   
                  </tbody>
                </table>
              </div>
          </div>
        </div>
   