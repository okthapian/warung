<?php 
include'koneksi.php';
echo '
 <div class="container-fluid">
 	<div class="col-md-2">
 		<div class="panel panel-default">
			 	<form>
	  			<div class="panel-heading">Kategori</div>
	  			<div class="panel-body">';
	  			$data_kategori = mysqli_query($konek,"SELECT * FROM `jenis_menu` ");
      			$a=0;
       			while($data= mysqli_fetch_array($data_kategori)){
       				echo '<div class="radio">
				  		<label><input type="radio" value="'.$data['id_jenis'].' name="optradio">'.$data['nama_jenis'].'</label>
					</div>';
       			};
					echo'<div class="col-md-12">
			  				<div class="input-group">
			    				<input id="msg" type="text" class="form-control" name="msg" placeholder="Makanan">
			    				<input id="msg" type="text" class="form-control" name="msg" placeholder="Harga">
			    				<a href="">cari</a>
			  				</div>
						</form>
		 			</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">Meja</div>
			<div class="panel-body">
				meja 1:              
			</div>
			<div class="panel-body">
				meja 2:
			</div>
			<div class="panel-body">
				meja 3:
			</div>
			<div class="panel-body">
				meja 4:
			</div>
			<div class="panel-body">
				meja 5:
			</div>
		</div>
	</div>

 	<div class="col-md-8">';
 		$data_menu = mysqli_query($konek,"SELECT * FROM `menu` ");
      	$a=0;
       	while($dataM= mysqli_fetch_array($data_menu)){
       		$a++;
       	};
       	$angka=ceil($a/4);
       	$awal=0;
       	$akhir=4;
       	for ($i=0; $i <$angka ; $i++) { 
       		echo '<div class="container-fluid">';
       		$menu_loop = mysqli_query($konek,"SELECT * FROM `menu` LIMIT ".$awal.",".$akhir);
       		while($dataMen= mysqli_fetch_array($menu_loop)){ 
       			echo '<div class="col-md-3">
		 				<div class="panel panel-default">
    						<div class="panel-body">
    							
    							<p align="center">
    							<img src="img/'.$dataMen['foto_menu'].'" width="75%" height="130px" alt="'.$dataMen['foto_menu'].'" ><br>
		    					'.$dataMen['nama_menu'].'<br>
		    					harga:rp.'.$dataMen['harga_menu'].'<br><br>
		    					 <br><br>
				 				<button type="button" class="btn btn-lg btn-primary btn-block" href="#portfolioModal1" >detail</button>
    							</p>
    						</div>
  						</div>
					 </div>';
       		}
       		$awal=$awal+4;
       		$akhir=$akhir+4;
       		echo '</div>';
       	}
 	

echo '
    </div>
 	<div class="col-md-2"></div>
 </div>
';
?>