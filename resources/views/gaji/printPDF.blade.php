
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
    <h1>Data gaji</h1>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>ID gaji</th>
				<th>jumlah Gaji</th>
				<th>tunjangan</th>
				<th>Total Gaji</th>
				<th>Tanggal Gaji</th>
            <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($gaji as $item)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $item->jumlah_gaji }}</td>
				<td>{{ $item->tunjangan }}</td>
				<td>{{ $item->total_gaji }}</td>
				<td>{{ $item->tanggal_gaji }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>