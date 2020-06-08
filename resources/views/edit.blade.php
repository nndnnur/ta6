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
	<a href="/staff"> Kembali</a>
	
	<br/>
 
    @foreach($staff as $p)
    <form action="/staff/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->staff_id }}"><br>
        Nama <br><input type="text" required="required" name="nama" value="{{ $p->staff_nama }}"> <br>
        Jabatan <br><input type="text" required="required" name="jabatan" value="{{ $p->staff_jabatan }}"> <br><br>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach 
</body>
</html>