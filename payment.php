<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['tracker'])){
?>

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
      <li><a href="index.php"><span class="glyphicon glyphicon-backward"></span> Kembali ke Halaman Utama</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">LANGKAH RESERVASI</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">1. JADWAL 
								<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
								</h3>
							</div>
							<div class="panel-body">
								JADWAL KEBERANGKATAN
							</div>
						</div>
					</div>
				<div class="col-md-3">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">2. DAFTAR KEBERANGKATAN</h3>
							</div>
							<div class="panel-body">
								WAKTU KEBERANGKATAN
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">3. INFORMASI PENUMPANG</h3>
							</div>
							<div class="panel-body">
								IDENTITAS PENUMPANG
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3 class="panel-title">4. INFORMASI PEMBAYARAN</h3>
							</div>
							<div class="panel-body">
								TOTAL PEMBAYARAN
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>INFO PEMBAYARAN</center>
			 </h2>
			 <br />
			 
				<div class="container-fluid">
				<strong>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				PENUMPANG</strong>
					<table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
							    <tr>
							        <th>
							        	<center>
							       			Nama
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		Umur
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Jenis Kelamin
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Harga
							        	</center>
						        	</th>
							    </tr>
							</thead>
						    <tbody>
						    <?php
						    	require_once('data/getBooked.php');
						    	$totalPayment = 0;
						    	$tracker = '';
						     foreach($bookPass as $bp): 
						    	$name = $bp['book_name'];
						    	$name = ucwords($name);
						    	$price = $bp['acc_price'];
						    	$totalPayment += $price;
						    	$tracker = $bp['book_tracker'];
						    ?>
						    	<tr align="center">
						    		<td><?= $name; ?></td>
						    		<td><?= $bp['book_age']; ?></td>
						    		<td><?= $bp['book_gender']; ?></td>
						    		<td><?= $price; ?></td>
						    	</tr>
						    <?php endforeach; ?>
						    	<tr>
						    		<td></td>
						    		<td></td>
						    		<td align="right"><strong>TOTAL:</strong></td>
						    		<td align="center"><strong><?= $totalPayment; ?></strong></td>
						    	</tr>
						    </tbody>
						    		    <strong>- Kode Pemesananan: <?= $tracker; ?></strong>
						   </table>
						   <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">PEMBAYARAN</h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Nama Pemesan <span style="color:red;">*</span> :</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Nama Pemesan" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Total Harga <span style="color:red;">*</span>:</label>
								    <input type="number" class="form-control" id="<?= $totalPayment; ?>"
								    placeholder="Total Harga" required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Pembayaran via <span style="color:red;">*</span>:</label>
								    <select name="bank" required oninvalid="this.setCustomValidity('Wajib dipilih')" oninput ="setCustomValidity('')">
										<option value="">-- Pilih --</option>
										<option value="bca">BCA</option>
										<option value="mandiri">Mandiri</option>
										<option value="DANA">DANA</option>
										<option value="OVO">OVO</option>
										</select>
										</div>
									 <div class="form-group ">
									 	<form action="upload.php" method="post" enctype="multipart/form-data">
								    <label for="">Bukti Pembayaran<span style="color:red;">*</span>:</label>	<br>
								    <input type="file" name="buktitransfer" />
									<br/>
								</form>
										</div>
											
								  </div>
					  		</div>
					  	</div>
					  </div>
						   <center>
							   <a href="bayar.php" class="btn btn-success">BAYAR
								   <span class="" aria-hidden="true"></span>
							   </a>
						   </center>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

						    

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>



</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset
?>
