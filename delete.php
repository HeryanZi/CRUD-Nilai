<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<body>
<?php
include "koneksi.php";
$id_peserta = $_GET['id'];

$update = "DELETE FROM peserta where id_peserta='$id_peserta'";
$update_query = mysqli_query($koneksi, $update);

if ($update_query) {
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: 'Data Berhasil Dihapus',
            icon: 'success',
        }).then(function() {
            window.location.href = 'index.php';
        });
    </script>
    <?php
} else {
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: 'Data Gagal dihapus',
            icon: 'error',
        }).then(function() {
            window.location.href = 'index.php';
        });
    </script>
    <?php
}
?>
</body>
</html>
