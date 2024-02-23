<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("location: login.php");
  exit;
}
?>
<html>

<head>
  <Title>Form Input Peserta </title>

  <link rel="stylesheet" href="css/bootstrap.css">
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
            <h1 class="text-white">Selamat Datang Di Form Input Data</h1>
        </header>
        <!-- headeeeerrrr closers -->
  <div class="w-50 mx-auto border p-3 mt-3">
        <div class="card-header bg-primary text-white d-flex justify-content-center">
            FORM TAMBAH DATA
        </div>
        <form action="prosesSimpan.php" method="post">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" required>
            <label for="nama_gugus">Nama Gugus</label>
            <input type="text" id="nama_gugus" name="nama_gugus" class="form-control" required>
            <label for="nama_koordinator">Nama Koordinator</label>
            <input type="text" id="nama_koordinator" name="nama_koordinator" class="form-control" required>
            <label for="kontak">Kontak</label>
            <input type="text" id="kontak" name="kontak" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" value="Tambah Data">
            <input class="btn btn-danger mt-3" type="reset" value="Reset Data">
            <a class="btn btn-primary mt-3" href="index.php" role="button">Kembali</a>
        </form>
    </div>
</body>
<footer class="bg-secondary bgme-f text-center mb-4 p-5">
            <p class="text-white mb-0">UJIKOM Junior WEB Developer</p>
            <p class="text-white mb-0">Heryan Farezi</p>
        </footer>
</html>