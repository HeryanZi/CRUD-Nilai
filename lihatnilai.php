<!DOCTYPE html>
<html lang="en">
<head>
    <title>HASIL NILAI</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <style>
        @media print {
        .noPrint{
            display:none;
            }
      }</style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center ">HASIL PENILAIAN</h2>
    <button onclick="window.print()" class="btn-primary noPrint">Print</button>
    
    <table class="table table-striped table-hover">
        <thead class = table-light>
            <tr>
                <th>LKBBT</th>
                <th>Pioneering</th>
                <th>Semaphore Slide</th>
                <th>Semaphore Dance</th>
                <th>Puzzle Flag</th>
                <th>Hasta Karya</th>
                <th>Guest The Hero</th>
            </tr>
        </thead>
        <tbody>

        <?php
        include 'koneksi.php';

        $ID = $_GET['id'];
        $tampil = mysqli_query($koneksi,"select * from nilai where id_peserta=$ID");
        $data = mysqli_fetch_array($tampil);

        // Cek apakah data nilai ditemukan
        if($data) {
            ?>
            <tr>
                <td><?php echo $data['lkbbt']; ?></td>
                <td><?php echo $data['pioneering']; ?></td>
                <td><?php echo $data['semaphore_slide']; ?></td>
                <td><?php echo $data['semaphore_dance']; ?></td>
                <td><?php echo $data['puzzle_flag']; ?></td>
                <td><?php echo $data['hasta_karya']; ?></td>
                <td><?php echo $data['guest_the_hero']; ?></td>
            </tr>
            <?php
        } else {
            echo "<tr><td colspan='8' class='text-center'>Belum ada data nilai</td></tr>";
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>
