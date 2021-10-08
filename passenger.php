<?php 

if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}

if(isset($_SESSION['accomodation'])){
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
      	<a href="#">Rerservasi
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
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>PERHATIAN!</strong> Mohon isi data diri anda dengan benar. Anda tidak dapat mengubah data jika telah di proses.
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
			 <h2>
			 	<center>INFORMASI PENUMPANG</center>
			 </h2>
				<div class="container-fluid">
					<form class="form-horizontal" role="form" id="form-pass">
					  <div class="form-group">
					    <label for="">Nama:</label>
					    <input type="text" class="form-control" id="book-by" placeholder="Enter Name"
					    autofocus="" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">No.Telepon:</label>
					    <input type="text" class="form-control" id="cont" placeholder="Enter Contact" required="" autocomplete="off">
					  </div>
					  <div class="form-group">
					    <label for="">Alamat Email:</label>
					    <input type="text" class="form-control" id="address" placeholder="Enter Address" required="" autocomplete="off">
					  </div>
					<br />
					<?php 
						$tb = $_SESSION['totalPass'];	
					 	$count = 1;
					 	for($i = 0; $i < $tb; $i++){
					?>
					  <div class="panel panel-primary">
					  	<div class="panel-heading">
					  		<h3 class="panel-title">Penumpang - <?= $count; ?></h3>
					  	</div>
					  	<div class="panel-body">
					  		<div class="container-fluid">
					  			<div class="form-group">
								    <label for="">Nama Lengkap(<?= $count; ?>):</label>
								    <input type="text" class="form-control" id="fN<?php echo $i; ?>"
								    placeholder="Enter Fullname" required autocomplete="off">
								  </div>

								  <div class="form-group">
								    <label for="">Umur: (<?= $count; ?>):</label>
								    <input type="number" class="form-control" id="age<?php echo $i; ?>"
								    placeholder="Enter Age" required autocomplete="off">
								  </div>
								  <div class="form-group">
								    <label for="">Jenis Kelamin: (<?= $count; ?>):</label>
								    <select class="btn btn-default" id="gender<?php echo $i; ?>">
								    	<option value="Male">Laki-Laki</option>
								    	<option value="Female">Perempuan</option>
								    </select>
								  </div>
					  		</div>
					  	</div>
					  </div>
					<?php
					$count++;
					 	}//end for
					 ?>
					  <button type="submit" class="btn btn-success">NEXT
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<?php require_once('admin/modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('submit', '#form-pass', function(event) {
		event.preventDefault();
		/* Act on the event */
		var bookBy = $('#book-by').val();
		var cont = $('#cont').val();
		var address = $('#address').val();
		
		var counter = <?= $i; ?>;
		for(var i = 0; i < counter; i++){
			var fN = $('#fN'+i).val();
			var age = $('#age'+i).val();
			var gender = $('#gender'+i).val();
			$.ajax({
					url: 'data/save_booked.php',
					type: 'post',
					dataType: 'json',
					data: {
						bookBy : bookBy,
						cont : cont,
						address : address,
						fN : fN,
						age : age,
						gender : gender
					},
					success: function (data) {
						// console.log(data);
						if(data.valid == true){
							window.location = data.url;
						}
					},
					error: function(){
						// alert('Error: L192+');
					}
				});
		}//end for
		alert('Reservasi Sukses!');	
	});

</script>


</body>
</html>

<?php
}else{
	echo '<strong>';
	echo 'Page Not Exist';
	echo '</strong>';
}//end if else isset

 ?>