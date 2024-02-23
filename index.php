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
    <title>Ujikom</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <script src="js/2js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- <link rel="stylesheet" href="styleindex.css"> -->
    <!-- LALALALa -->

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
            <h1 class="text-white">Selamat Datang, User</h1>
        </header>
        <!-- headeeeerrrr closers -->
        <div class="container mt-3">
            <div class="logout d-flex justify-content-end">
                <a href="logout.php" id="btn-logout" class="btn btn-danger btn-md mb-3  "><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
            <div class="logout d-flex justify-content-right">
                <a href="index.php" id="btn-Home" class="btn btn-success btn-md mb-3  "><i class="fa-solid fa-house"></i> Home</a>
            </div>
            <a href="inputData.php" id="btn-tambah" class="btn btn-primary btn-md mb-3  "><i class="fa-solid fa-plus"></i> Tambah Data</a>
            <!-- Form Pencarian -->
            <form action="" method="GET" class="mt-3">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <input type="text" name='cari' class="form-control">
                        <div class="input-group-prepend ">
                            <button type="submit" name="search" class="btn btn-primary btn-lg mt-6">
                                <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <table class="table table-stripped table-hover table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Nama Sekolah</th>
                        <th>Nama Gugus</th>
                        <th>Nama Koordinator</th>
                        <th>Kontak Person</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include 'koneksi.php';

                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nama_sekolah LIKE '%" . $cari . "%' OR nama_gugus LIKE '%" . $cari . "%' OR nama_koordinator LIKE '%" . $cari . "%'");
                    } else {
                        $data = mysqli_query($koneksi, "SELECT * FROM peserta");
                    }

                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                        // Check apakah sudah ada data nilai untuk peserta ini
                        $checkNilai = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_peserta = '" . $d['id_peserta'] . "'");
                        $nilaiExist = mysqli_num_rows($checkNilai) > 0;

                    ?>
                        <tr>
                            <td><?php echo $d['nama_sekolah']; ?></td>
                            <td><?php echo $d['nama_gugus']; ?></td>
                            <td><?php echo $d['nama_koordinator']; ?></td>
                            <td><?php echo $d['kontak']; ?></td>
                            <td>
                                <div class='row'>
                                    <div class='col d-flex btn-group'>
                                        <a href="inputnilai.php?id=<?php echo $d['id_peserta']; ?>" class="btn btn-outline-success <?php echo $nilaiExist ? 'disabled' : ''; ?>" id="inputNilai" <?php echo $nilaiExist ? 'disabled' : ''; ?>>Input Nilai</a>
                                        <a href="lihatnilai.php?id=<?php echo $d['id_peserta']; ?>" class="btn btn-outline-primary">Lihat Nilai</a>
                                        <a href="edit.php?id=<?php echo $d['id_peserta']; ?>" class="btn btn-outline-warning">Edit</a>
                                        <a href="javascript:confirmDelete('delete.php?id=<?php echo $d['id_peserta']; ?>')" class="btn btn-outline-danger">Delete</a>
                                    </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>

        <script>
            function confirmDelete(delUrl) {
                if (confirm("Kamu Yakin akan menghapus Data Ini??")) {
                    document.location = delUrl;
                }
            }
        </script>
        <footer class="bg-secondary bgme-f text-center mb-4 p-5">
            <p class="text-white mb-0">UJIKOM Junior WEB Developer</p>
            <p class="text-white mb-0">Heryan Farezi</p>
        </footer>
</body>

</html>