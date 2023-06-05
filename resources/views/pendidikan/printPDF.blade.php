
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
    <h1>Data pendidikan</h1>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
            <th>pendidikan_terakhir</th>
            <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pendidikan as $item)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $item->id_pendidikan }}</td>
            <td>{{ $item->pendidikan_terakhir }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>