@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="jumbotron">
       <center><h1>---data tabel!---</h1></center>
        <p></p>
      </div>
<div class="container">
	<table border="2" class="tables">
        <th>Id</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal lahir</th>
        <th>Alamat</th>
        <th>Cita-Cita</th>
        <th>Hobi</th>
        <th>Foto</th>
   @foreach ($c as $gg)
   <tr>
 	<td>{{$gg -> id}}</td>
 	<td>{{$gg -> nim}}</td>
 	<td>{{$gg -> nama}}</td>
 	<td>{{$gg -> tempat_lahir}}</td>
 	<td>{{$gg -> tanggal_lahir}}</td>
 	<td>{{$gg -> alamat}}</td>
 	<td>{{$gg -> cita_cita}}</td>
 	<td>{{$gg -> hobi}}</td>
    <td><img src="{{ asset('gambar/'.$gg->foto) }}" style="max-height: 150px;max-width: 150px;margin-top: 10px;"></td>
 	@endforeach
</tr>
</table>
<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><center><a href="1" button type="button" class="btn btn-lg btn-primary">Back To Home</button></a></li>
            </ul>
        </div>
</body>
</html>
@endsection