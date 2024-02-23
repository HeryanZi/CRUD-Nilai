<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input Data Pasien</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <script src="js/2js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <style>
        header {
            padding: 50px;
        }

        .content {
            min-height: 411px;
        }

        .bgme-f {
            background-color: chocolate;
        }
    </style>
</head>

<body>
<div class="container-fluid p-0">
        <header class="bg-success text-center">
            <h1 class="text-white">Selamat Datang Di Form EDIT</h1>
        </header>
        <!-- headeeeerrrr closers -->
    <?php
    include 'koneksi.php';
    $ID = $_GET['id'];
    $tampil = mysqli_query($koneksi, "select * from peserta where id_peserta=$ID");
    $data = mysqli_fetch_array($tampil);
    ?>
<div class="w-50 mx-auto border p-3 mt-3">
    <div class="card-header bg-primary text-white d-flex justify-content-center">
            FORM EDIT DATA
            </div>

        <form action="proses_update.php" method="POST">
            <table class="table table-bordered mx-auto mt-5" style="width: 400px;">
                <label for="id_peserta">ID Peserta</label>
                <input type="text" name="id_peserta" class="form-control" readonly value="<?php echo $data['id_peserta']; ?>">

                <label for="nama_sekolah">Nama Sekolah</label>

                <input type="text" name="nama_sekolah" class="form-control" value="<?php echo $data['nama_sekolah']; ?>">

                <label for="nama_gugus">Nama Gugus</label>

                <input type="text" name="nama_gugus" class="form-control" value="<?php echo $data['nama_gugus'] ?>">

                <label for="nama_koordinator">Nama Koordinator</label>

                <input type="text" name="nama_koordinator" class="form-control" value="<?php echo $data['nama_koordinator']; ?>">

                <label for="kontak">Kontak</label>

                <input type="text" name="kontak" class="form-control" value="<?php echo $data['kontak']; ?>">
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" class="btn btn-success mt-3" value="Update">
                        
                        <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
</div>
</body>
<footer class="bg-secondary bgme-f text-center mb-4 p-5">
            <p class="text-white mb-0">UJIKOM Junior WEB Developer</p>
            <p class="text-white mb-0">Heryan Farezi</p>
        </footer>
</html>