@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title>tugas</title>
</head>
<body>
<div class="page-header">
        <center><h1>KATA KATA MUTIARA</h1></center>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">M Aditya Juanda</h3>
            </div>
            <div class="panel-body">
              "Bekerjalah Seperti Anda Tidak Membutuhkan Uang.
              Mencintailah Seperti Anda Tidak Pernah Tersakiti.
              Menarilah Seolah-Olah Tidak Ada Yang Melihat."
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Rizal Pradana</h3>
            </div>
            <div class="panel-body">
              "Kepuasan Membuat Orang-Orang Miskin Menjadi Kaya.
              Ketidakpuasaan Membuat Orang-Orang Kaya Menjadi Miskin."
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">M Junika Berli</h3>
            </div>
            <div class="panel-body">
              "Setiap Orang Gila Yang Jenius Bisa Membuat Sesuatu Lebih Besar,Lebih Kompleks,dan Lebih Sengit.
              Dibutuhkan Sentuhan Jenius Dan Keberanian Untuk Melawan Arus.
              Imajinasi Lebih Penting Daripada Pengetahuan."
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Luthfi Alfikri</h3>
            </div>
            <div class="panel-body">
              "Jangan Merasa Sempurna Karena Manusia Tidak Ada Yang Sempurna.
              Syukuri Saja Dengan Yang Ada Begitu Pun Dengan Kekurangan Kita."
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Dheri Firmansyah</h3>
            </div>
            <div class="panel-body">
              "Hargailah Dan Hormatilah Wanita Seperti Engkau Menghargai Ibumu Yang Telah
              Melahirkan Dan Membesarkanmu Dengan Penuh Kasih Sayang."
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Agung Sugianto</h3>
            </div>
            <div class="panel-body">
              "Ingatlah.. Allah Selalu Memberikan Kelebihan Di Balik Kekurangan.. 
               Allah Selalu Memberikan Kekuatan Dibalik Kelemahan." 
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First Blood <span class="text-muted">Agung,Dheri,Luthfi,Junika In Taufik's House.</span></h2>
          <p class="lead">Ilmu itu lebih baik daripada harta. Ilmu menjaga engkau dan engkau menjaga harta. Ilmu itu penghukum (hakim) dan harta terhukum. Harta itu kurang apabila dibelanjakan tapi ilmu bertambah bila dibelanjakan.</p>
        </div>
        <div class="col-md-5">
          <?php
          $image=glob("gambar/20170209_154856.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <?php
          $image=glob("gambar/IMG_20171126_210925_177.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Double Kill. <span class="text-muted">Aep,Agung,Dheri,Luthfi,Junika In School For Homework.</span></h2>
          <p class="lead">Nilai seseorang sesuai dengan kadar tekadnya, ketulusannya sesuai dengan kadar kemanusiaannya, keberaniannya sesuai dengan kadar penolakannya terhadap perbuatan jahat dan kesucian hati nuraninya sesuai dengan kadar kepekaannya terhadap kehormatan dirinya.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Tripple Kill. <span class="text-muted">Dani,Luthfi,Junika,Rika,Yeni Is Scout Assalaam.</span></h2>
          <p class="lead">Selemah-lemah manusia ialah orang yg tak mau mencari sahabat dan orang yang lebih lemah dari itu ialah orang yg mensia-siakan sahabat yg telah dicari.</p>
        </div>
        <div class="col-md-5">
          <?php
          $image=glob("gambar/20171214_155856.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?></div>
      </div>

        <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <?php
          $image=glob("gambar/IMG_20171110_212724_708.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Maniac. <span class="text-muted">Kiki,Laela,Luthfi,Mupid,Junika Is Assalaam Scout.</span></h2>
          <p class="lead">Ketahuilah bahwa sabar, jika dipandang dalam permasalahan seseorang adalah ibarat kepala dari suatu tubuh. Jika kepalanya hilang maka keseluruhan tubuh itu akan membusuk. Sama halnya, jika kesabaran hilang, maka seluruh permasalahan akan rusak</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Savage. <span class="text-muted">Agung,Alfi,Luthfi,Faisal,Aldhit,Rastian,Rizal,Sandika Is A First Time To Be A Friends.</span></h2>
          <p class="lead">Orang yang mengerti ilmu fikih berarti ia bisa makrifat kepada Allah dengan ilmunya menyebabkan ia kenal kepada-Nya. Bahkan dengan ilmunya ia bisa mengajar orang lain sampai pandai.</p>
        </div>
        <div class="col-md-5">
          <?php
          $image=glob("gambar/IMG_20160902_105655.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?></div>
      </div>


      <div class="row featurette">
        <div class="col-md-5">
          <?php
          $image=glob("gambar/IMG_20171217_110222_568.jpg");
          for($i=0;$i<count($image);$i++)
            {
          $single_image = $image[$i];
          ?>
          <img src="<?php echo $single_image;?>" width="460" height="260"/?>
          <?php
            }
          ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Wiped out <span class="text-muted">Dhani,Fahmi,Luthfi,Mupid,Rafi With JBB We Not Give Up For Go Green.</span></h2>
          <p class="lead">Jangan berteman yang hanya mau menemanimu ketika kamu sehat atau kaya, karena tipe teman seperti itu sungguh berbahaya sekali bagi kamu dibelakang hari.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><center><a href="1" button type="button" class="btn btn-lg btn-danger">Back To Home</button></a></li>
            </ul>
        </div>


</body>
</html>
@endsection