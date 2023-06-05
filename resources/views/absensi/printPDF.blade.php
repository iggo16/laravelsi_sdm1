
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <h1>Data absensi</h1>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<<th>No</th>
				<th>Nama Pegawai</th>
						  <th>jam Masuk</th>
						  <th>jam istirahat</th>
						  <th>tanggal kerja</th>
						  <th>opsi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($absensi as $item)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $item->pegawai->nama }}</td>
				<td>{{ $item->jam_masuk }}</td>
				<td>{{ $item->jam_istirahat }}</td>
				<td>{{ $item->tanggal_kerja }}</td>
            <td>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>