<!DOCTYPE html>
<html>
<head>
	<title>~:: Warung Skydream ::~</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form action="?lupa=lupa"  method="POST">
	email <input type="text" name="email" id="email" >
	<input type="submit" name="submit" value="kirim">
</form>
<?php 
include 'koneksi.php' ;
 	$page = isset($_GET['lupa']);
 	switch ($page) {
 	case 'lupa':
 		$email=isset($_POST['email']);
 		$cari_data=mysqli_query($konek,"SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
		while($hasil=mysqli_fetch_array($cari_data)){
			echo $hasil['id_pelanggan'].$hasil['nama_pelanggan'];
		}
 		break;
 }
?>
</body>
</html>