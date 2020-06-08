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
    input{
      border-radius: 4px;
      border: 1px solid black;
    }
    </style>
</head>
<body>
    <h3>Data Staff</h3>
    <a href="/staff">Kembali</a>
    <br><br>

    <form action="/staff/store" method="post">
    {{ csrf_field() }}
    Nama <br><input type="text" name="nama" required="required"><br>
    Jabatan<br> <input type="text" name="jabatan" required="required"><br><br>
    <input type="submit" value="Simpan Data">
    </form>
</body>