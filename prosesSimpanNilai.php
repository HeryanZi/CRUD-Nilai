<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>
<?php
include "koneksi.php";
$id_peserta = $_POST['id_peserta'];
$lkbbt = $_POST['lkbbt'];
$pioneering = $_POST['pioneering'];
$semaphore_slide = $_POST['semaphore_slide'];
$semaphore_dance = $_POST['semaphore_dance'];
$puzzle_flag = $_POST['puzzle_flag'];
$hasta_karya = $_POST['hasta_karya'];
$guest_the_hero = $_POST['guest_the_hero'];

// Menyiapkan query SQL
$sql = "INSERT INTO nilai (id_peserta, lkbbt, pioneering, semaphore_slide, semaphore_dance, puzzle_flag, hasta_karya, guest_the_hero)
VALUES ('$id_peserta', '$lkbbt', '$pioneering', '$semaphore_slide', '$semaphore_dance', '$puzzle_flag', '$hasta_karya', '$guest_the_hero')";

$insert_query = mysqli_query($koneksi, $sql);

if ($insert_query){
	echo "Data Berhasil diTambah";
	header('location:index.php');
	
}else{
	echo "Data Gagal diTambah";
}
?>