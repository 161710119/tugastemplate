@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <title>tugas</title>
</head>
<body bgcolor="black">
<div class="jumbotron">
	<center>
        <h1>LUTHFI'S HOME PAGE</h1>
        <p>PROGRAMMERS ARE PROBLEM SOLVERS</p>
        <p>Is There More Than One Way To Solve A Certain Problem?</p>
    </center>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Gallery</h2>
          <p><a class="btn btn-primary" href="2" role="button">Klikk Disini &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Data Siswa</h2>
          <p><a class="btn btn-warning" href="3" role="button">Klikk Disini &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Paragraph</h2>
          <p><a class="btn btn-success" href="4" role="button">Klikk Disini &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Biodata</h2>
          <p><a class="btn btn-danger" href="5" role="button">Klikk Disini &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Kata-Kata Mutiara</h2>
          <p><a class="btn btn-info" href="6" role="button">Klikk Disini &raquo;</a></p>
        </div>
      </div>
</body>
</html>
@endsection