
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Pegawai</title>
    <!-- Masukkan stylesheet atau file CSS yang diperlukan -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Tambahkan gaya CSS kustom di sini */
body {
  background-color: #f8f8f8;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 960px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  border-radius: 4px;
}

h1 {
  color: #333;
  font-size: 24px;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 8px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

.btn {
  display: inline-block;
  padding: 8px 12px;
  border-radius: 4px;
  margin-right: 10px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-primary,
.btn-danger {
  color: #fff;
  border: none;
}

.btn-primary:hover,
.btn-danger:hover {
  background-color: #0056b3;
  transform: scale(1.05);
}

.btn-danger {
  background-color: #dc3545;
}

.btn-danger:hover {
  background-color: #b52b39;
}



    </style>
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Masukkan script atau file JavaScript yang diperlukan -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
