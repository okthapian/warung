<!DOCTYPE html>
<?php 
session_start();
include"koneksi.php";
	$data_user=$_SESSION['id_pelanggan'];
    $tampil=mysqli_query($konek,"SELECT * FROM pelanggan WHERE id_pelanggan=$data_user");
    $hasil=mysqli_fetch_array($tampil);

 ?>
<html>
<head>
	<title>~:: Warung Skydream ::~</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <style type="text/css">
	    footer {
	        background-color: #FF6E00;
	        color: white;
	        padding: 15px;
	      }
    </style>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-link" href="home_pelanggan.php?page=home"><u>Skydream</u></a>
				<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navcol-1">
				<UL class="nav navbar-nav" >
					<li role="presentation"><a href="home_pelanggan.php?page=menu">menu</a></li>
					<li role="presentation"><a href="home_pelanggan.php?page=meja">meja</a></li>
				</UL>
				<UL class="nav navbar-nav navbar-right" >
        <li role="presentation"> <a href="home_pelanggan.php?page=keranjang"> <span class="glyphicon glyphicon-home"></span> : 0</a> </li>
					<li role="presentation"><a href=""><span class="glyphicon glyphicon-user"></span>_<?php echo $hasil['nama_pelanggan']; ?></a></li>
					<li role="presentation"><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
				</UL>
			</div>
		</div>
	</nav>
	<!-- Navigasi bar=================================================================================== -->
	<!-- BOdy ========================================================================================== -->
<?php 
    if(isset($_GET["page"])){ //set halaman dengan GET
        $page = $_GET["page"];
 
        switch ($page) {
            case "home":
                include "page/home.php";
                break;
            case "menu":
                include "page/makanan.php";
                break;
            case "meja":
                include "page/meja.php";
                break;
            case "keranjang":
                include "page/keranjang.php";
                break;
            case "profil":
                include "page/profil.php";
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "page/home.php";
    }
 
     ?>
	<!-- BOdy ========================================================================================== -->
<footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Alamat</h3>
              <p>desa Bulutengger
                <br>kec,Sekaran-kab Lamongan</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>kontak saya</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.facebook.com/okthapian" target="_blank">
                  	<img src=" img/facebook.png" width="30" class="img-circle">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.instagram.com/iqbal_okthapian/" target="_blank">
                  	<img src=" img/instagram.png" width="30" class="img-circle">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://twitter.com/iqbal_okthapian" target="_blank">
                    <img src="img/twitter.png" width="30" class="img-circle">
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://plus.google.com/u/1/+iqbalokthapian?hl=id" target="_blank">
                    <img src="img/email.png" width="30" class="img-circle">
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About </h3>
              <p>Terima berbagai macam pesanan
                <a href="https://www.rumahweb.com/journal/web-developer-web-designer-dan-webmaster.htm" target="_blank">Detail pemesanan</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; warung_skydream_2017
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>