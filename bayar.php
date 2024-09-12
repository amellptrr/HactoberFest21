<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-TICKETING LRT PALEMBANG</title>

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

	</head>
<body style="background-color: lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-TICKETING LRT PALEMBANG</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      	<a href="#">Reservasi
      	<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
      	</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span>kembali ke Halaman Utama</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<center>
			<strong>PEMBAYARAN SUKSES!</strong><br> Pembayaran Anda Telah Di-Konfirmasi. Terima Kasih Telah Menggunakan Jasa Angkutan LRT SumSel.</center>
		</div>
		</div>
	</div>

	<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>TIKET</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center>KEBERANGKATAN</center></h3>
			 	</div>
			 	<div class="panel-body">
			 		<strong>
			 			<i>LRT Sumatera Selatan</i><br>
			 			<?php
						echo date("d/m/Y h:i a")
						?>
			 			<h3>
			 			<?php require_once('data/depart_from_to.php'); 
			 				echo $origin['origin_desc'];?>
			 				-
			 			 <?= $dest['dest_destination']; ?>
			 			 </h3>
			 			<p>Waktu Keberangkatan: <?= $_SESSION['departure_date']; ?>
			 		</strong> 
			 			<strong>
			 				<p>Jam Keberangkatan: <?php require_once('data/get_accomodation.php'); 
			 					echo $accomodation['acc_type'];
			 				?>
			 			</strong>
			 	</div>
			 </div>

			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">INFORMASI KONTAK</h3>
			 	</div>
			 	<div class="panel-body">
			 	<?php require_once('data/getBooked.php'); ?>
			 	<strong>Nama:</strong> <?= ucwords($bookByInfo['book_by']);  ?><br /> 
			 	<strong>Kontak #:</strong> <?= $bookByInfo['book_contact']; ?><br />
			 	<strong>Alamat Email:</strong> <?= $bookByInfo['book_address']; ?><br />
			 	</div>
			 </div>
				
						    </tbody>
</body>
</html>

