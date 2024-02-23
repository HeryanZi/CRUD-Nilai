<?php
session_start();
if ( !isset($_SESSION['login'])){
	header("location: login.php");
	exit;
}
?>
<html>
  <head>
    <Title>Form Input Nilai </title>
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
            <h1 class="text-white">Selamat Datang Di Form Input Nilai</h1>
        </header>
        <!-- headeeeerrrr closers -->
<?php
include 'koneksi.php';
$ID = $_GET['id'];
$tampil = mysqli_query($koneksi,"select * from peserta where id_peserta=$ID");
$data = mysqli_fetch_array($tampil);
?>
    <!-- -------------------------------------------------------------- -->
    <div class="w-50 mx-auto border p-3 mt-3">
        <div class="card-header bg-primary text-white d-flex justify-content-center">
        FORM INPUT NILAI
        </div>
        <form action="prosesSimpanNilai.php" method="post">
          <tr>
            <input type="hidden" id="id_peserta" name="id_peserta" value="<?php echo $ID?>" class="form-control" >
            </tr>
            <label for="lkbbt">LKBBT</label>
            <input type="number" id="lkbbt" name="lkbbt" min="1" max="100" class="form-control" required>
            <label for="pioneering">Pioneering</label>
            <input type="number" id="pioneering" name="pioneering" min="1" max="100" class="form-control" required>
            <label for="semaphore_slide">Semaphore Slide</label>
            <input type="number" id="semaphore_slide" name="semaphore_slide" min="1" max="100" class="form-control" required>
            <label for="semaphore_dance">Semaphore Dance</label>
            <input type="number" id="semaphore_dance" name="semaphore_dance" min="1" max="100" class="form-control" required>
            <label for="puzzle_flag">Puzzle Flag</label>
            <input type="number" id="puzzle_flag" name="puzzle_flag" min="1" max="100" class="form-control" required>
            <label for="hasta_karya">Hasta Karya</label>
            <input type="number" id="hasta_karya" name="hasta_karya" min="1" max="100" class="form-control" required>
            <label for="guest_the_hero">Guest The Hero</label>
            <input type="number" id="guest_the_hero" name="guest_the_hero" min="1" max="100" class="form-control" required>

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