<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
    body{
      font-family: Tahoma;
      background-color: white;
      font-size: 15px;
    }
    th{
      border: 1px solid black;
      background-color: #d1d1e0;
    }
    td{
      border: 1px;
      background-color: white;
    }
    button{
      background-color: white;
      padding: 10px;
      border-radius: 5px;
      border: 2px;
      transition: 0.5s;
    }
    input{
      border-radius: 4px;
      border: 1px solid black;
    }
  </style>
</head>
<body>
 
	<h3>Data Staff</h3>
 
	<a href="/staff/tambah"> + Tambah Staff Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
            <th>Aksi</th>
		</tr>
		@foreach($staff as $p)
		<tr>
			<td>{{ $p->staff_nama }}</td>
			<td>{{ $p->staff_jabatan }}</td>
			<td>
				<a href="/staff/edit/{{ $p->staff_id }}">Edit</a>
				|
				<a href="/staff/hapus/{{ $p->staff_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>