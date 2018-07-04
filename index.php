<!DOCTYPE html>
<html>
<head>
	<title>~:: Warung Skydream ::~</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container">
	<div class="row" id="pwd-container">
	    <div class="col-md-4"></div>
	    <div class="col-md-4">
	       	<section class="login-form">
		        <form method="post" action="cek_login.php" role="login">
		          	<img src="img/kasir.png" class="img-responsive" alt="skydream_kasir" />
		          	<input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
		          	<input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password"  />
		          	<div class="pwstrength_viewport_progress"></div>
		          	<button type="submit" name="go" class="btn btn-lg btn-success btn-block">Sign in</button>
		          	<div>
		            	<a href="daftar.php">Buat Akun</a>   || <a href="lupa_pass.php">Lupa Password</a>
		          	</div>
		        </form>
		        <div class="form-links">
		          <a href="#">copyright @ skydream_2018</a>
		        </div>
	      	</section>  
	    </div>
	    <div class="col-md-4"></div>
	</div>
</div>
</body>
</html>