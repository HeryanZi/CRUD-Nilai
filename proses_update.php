<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>
<?php
include "koneksi.php";
$NOPEN = $_POST['id_peserta'];
$TGL = $_POST['nama_sekolah'];
$ASAL = $_POST['nama_gugus'];
$TUJUAN = $_POST['nama_koordinator'];
$KELAS = $_POST['kontak'];

$update ="UPDATE peserta SET nama_sekolah='$TGL', nama_gugus='$ASAL', nama_koordinator='$TUJUAN', kontak='$KELAS' where id_peserta='$NOPEN'";
$update_query = mysqli_query($koneksi, $update);

if ($update_query){
	echo "Data Berhasil diUpdate";
	header('location:index.php');
	
}else{
	echo "Data Gagal diTambah";
}
?>