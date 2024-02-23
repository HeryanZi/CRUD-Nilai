<?php
session_start();
include 'koneksi.php';
$USER = $_POST['username'];
$PASS = $_POST['password'];

$sql = mysqli_query($koneksi,"select * from user where username='$USER' and password='$PASS'");
$cek = mysqli_num_rows($sql);
if ($cek > 0){
	$_SESSION['login'] =  true;
	header("location: index.php");
	exit;
}else{
	echo "Maaf username atau pass yg anda masukan salah";
	echo '<html><body><a href="login.php">-->Input Ulang</a></body></html>';
}
?>