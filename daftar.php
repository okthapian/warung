<!DOCTYPE html>
<html>
<head>
	<title>~:: Warung Skydream ::~</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<section class="login-form" >
 			<form  class="form-horizontal" action="insert.php" method="POST" role="login">
 			<img src="img/kasir.png" class="img-responsive" alt="skydream_kasir" />
   				<div class="form-group">
	     			<label class="col-sm-2 control-label"><br>Nama</label>
	     			<div class="col-sm-10">
	       				<input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="Nama">
	    			</div>

	    			<label class="col-sm-2 control-label"><br>Email</label>
	     			<div class="col-sm-10">
	       				<input type="email" id="email_pelanggan" name="email_pelanggan" class="form-control" placeholder="Email">
	    			</div>

	    			<label class="col-sm-2 control-label"><br>password &nbsp;</label>
	     			<div class="col-sm-10">
	       				<input type="password" id="password_pelanggan" name="password_pelanggan" class="form-control">
	    			</div>

	    			<label class="col-sm-2 control-label"><br>telepon</label>
	     			<div class="col-sm-10">
	       				<input type="text" id="telp_pelanggan" name="telp_pelanggan" class="form-control">
	    			</div>

	    			<label class="col-sm-2 control-label"><br>Alamat</label>
	     			<div class="col-sm-10">
	       				<input type="text" id="alamat_pelanggan" name="alamat_pelanggan" class="form-control">
	    			</div>

	    			<button type="submit" name="go" class="btn btn-lg btn-success btn-block">Daftar</button>
	    			<a href="index.php"><<==kembali</a>
    			</div>
			</form>
		</section>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>