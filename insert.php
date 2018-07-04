<?php 
include 'koneksi.php' ;
$nama=$_POST['nama_pelanggan'];
$email=$_POST['email_pelanggan'];
$password=$_POST['password_pelanggan'];
$telp=$_POST['telp_pelanggan'];
$alamat=$_POST['alamat_pelanggan'];
mysqli_query($konek,"INSERT INTO pelanggan (
		`nama_pelanggan`, 
		`email_pelanggan`, 
		`password_pelanggan`, 
		`telp_pelanggan`, 
		`alamat_pelanggan`) 
VALUES (
	'$nama',
	'$email',
	'$password',
	'$telp',
	'$alamat')");
echo"<meta http-equiv='refresh' content='0; URL=index.php' />";
 ?>