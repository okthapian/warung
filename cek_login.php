<?php SESSION_START ();
    include 'koneksi.php' ;
$_email=$_POST['email'];
$_pass =$_POST['password'];
        $a          = "SELECT * FROM pelanggan WHERE email_pelanggan='$_email' AND password_pelanggan='$_pass'";
        $b          = mysqli_query ($konek,$a) or die (mysqli_error());
        $ada        = mysqli_num_rows($b);
                if($ada=='0'){
                    echo"<script>alert('User/Password tidak di kenali____Pastikan masukkan username bukan email');</script>";
                    echo"<meta http-equiv='refresh' content='0; URL=index.php' />";
                }else{
                    $c = mysqli_fetch_array ($b);
                    $_SESSION['id_pelanggan'] = $c['id_pelanggan'];
                    echo"<script>alert('Welcome');</script>";
                    echo"<meta http-equiv='refresh' content='0; URL=home_pelanggan.php' />";
                    
        }
?>

