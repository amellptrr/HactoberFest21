<!DOCTYPE html>
<head>
<title>Konfirmasi Pembayaran Toko Kelontong Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Konfirmasi Pembayaran</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li style="display:none !important"><a href="http://coratcoretblog.blogspot.com">CoratCoretBlog</a></li>
</ul>
</div>
</nav>

<div class="container-fluid">

<div class="col-md-12">
<?php
echo date("d/m/Y h:i a")
?>
</div>

<br/><br/>
<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-2">
Nama: <span style="color:red;">*</span>
</div>
<div class="col-md-10">
<input type="text" name="nama" required oninvalid="this.setCustomValidity('Wajib diisi')" oninput ="setCustomValidity('')" />
</div>
<br/><br/>
<div class="col-md-2">
Nama Barang: <span style="color:red;">*</span>
</div>
<div class="col-md-10">
<input type="text" name="namaBarang" required oninvalid="this.setCustomValidity('Wajib diisi')" oninput ="setCustomValidity('')" /><br/><br/>
</div>
<br/><br/>

<div class="col-md-2">
Pembayaran melalui: <span style="color:red;">*</span>
</div>

<div class="col-md-10 dropdown">
<select name="bank" required oninvalid="this.setCustomValidity('Wajib dipilih')" oninput ="setCustomValidity('')">
<option value="">-- Pilih --</option>
<option value="bca">BCA</option>
<option value="mandiri">Mandiri</option>
<option value="bni">BNI</option>
<option value="bri">BRI</option>
<option value="btpn">BTPN</option>
</select>
</div>

<br/><br/>
<div class="col-md-2">
Bukti transfer
</div>
<div class="col-md-10">
<input type="file" name="bukti_transf" />
</div>
<br/><br/>
<div class="col-md-12">
<button type="submit" name="btn-upload">Kirim File</button>
</div>
</form>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title> 
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Pilih file: <input type="file" name="berkas" />
        <input type="submit" name="upload" value="upload" />
    </form> 
</body> 
</html>
?php

// ambil data file
$namaFile = $_FILES['bukti_transf']['name'];
$namaSementara = $_FILES['bukti_transf']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "buktitransfer/";

// pindahkan file
$buktitransfer = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($buktitransfer) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}

?>
<?php
//error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['btn-upload']))
{
$bukti_transf = date("d-m-Y h:i:s a")."-".$_POST['nama']."-".$_POST['namaBarang']."-".$_POST['bank']."-".$_FILES['bukti_transf']['name'];
$bukti_loc = $_FILES['bukti_transf']['tmp_name'];
$folder="buktitransfer/";
if(move_uploaded_file($folder.$bukti_transf))
{
?><script>alert('Upload file berhasil');</script><?php
}
else
{
?><script>alert('Gagal upload, silakan ulangi kembali');</script><?php
}
}

?>

</body>
</html>