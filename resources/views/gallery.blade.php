
@extends('layouts.1')
@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title>tugas</title>
</head>
<body>
	<center>
	<?php
	$image=glob("gambar/IMG_20171216_172948_637.jpg");
	$im=glob("gambar/20170209_154856.jpg");
	$ima=glob("gambar/IMG_20171126_210925_177.jpg");
	$imb=glob("gambar/IMG_20171217_110222_568.jpg");
	$imc=glob("gambar/IMG_20160902_105655.jpg");
	$imd=glob("gambar/20170711_195940.jpg");
	$ime=glob("gambar/IMG_20171110_212724_708.jpg");
	$img=glob("gambar/20170709_084714.jpg");
	$imh=glob("gambar/20170709_084940.jpg");
	for($i=0;$i<count($image);$i++)
		for($i=0;$i<count($im);$i++)
			for($i=0;$i<count($ima);$i++)
				for($i=0;$i<count($imb);$i++)
					for($i=0;$i<count($imc);$i++)
						for($i=0;$i<count($imd);$i++)
							for($i=0;$i<count($ime);$i++)
									for($i=0;$i<count($img);$i++)
										for($i=0;$i<count($imh);$i++)
						{
		$single_image = $image[$i];
		$double = $im[$i];
		$dosen = $ima[$i];
		$dodol = $imb[$i];
		$baham = $imc[$i];
		$guna = $imd[$i];
		$hujan = $ime[$i];
		$all = $img[$i];
		$star = $imh[$i];
		?>
	<img src="<?php echo $single_image;?>" width="360" height="260"/?>
	<img src="<?php echo $double;?>" width="360" height="260"/?>
	<img src="<?php echo $dosen;?>" width="360" height="260"/?>
	<img src="<?php echo $dodol;?>" width="360" height="260"/?>
	<img src="<?php echo $baham;?>" width="360" height="260"/?>
	<img src="<?php echo $guna;?>" width="360" height="260"/?>
		<img src="<?php echo $hujan;?>" width="360" height="260"/?>
				<img src="<?php echo $all;?>" width="360" height="260"/?>
					<img src="<?php echo $star;?>" width="360" height="260"/?>
	<?php
}
	?>
	<div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><center><a href="1" button type="button" class="btn btn-lg btn-success">Back To Home</button></a></li>
            </ul>
        </div>
</body>
</html>
@endsection