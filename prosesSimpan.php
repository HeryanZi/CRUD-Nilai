<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>
<?php

include "koneksi.php";
$NOPEN = $_POST['nama_sekolah'];
$TGL = $_POST['nama_gugus'];
$ASAL = $_POST['nama_koordinator'];
$TUJUAN = $_POST['kontak'];

$insert ="INSERT INTO peserta(id_peserta,nama_sekolah,nama_gugus,nama_koordinator,kontak)VALUES('','$NOPEN','$TGL','$ASAL','$TUJUAN')";
$insert_query = mysqli_query($koneksi, $insert);

if ($insert_query){
	echo "Data Berhasil diTambah";
	header('location:index.php');
	
}else{
	echo "Data Gagal diTambah";
}
?>