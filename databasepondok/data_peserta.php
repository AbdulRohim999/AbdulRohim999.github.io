<?php
    session_start();
    include 'proses_login.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
    <!-- Header -->
    <header>
        <h2><a href="beranda.php">Admin Ma’had Abdullah Ibnu Mas’ud</a></h2>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a class="button" href="data_peserta.php">Data Siswa</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- content -->

    <section class="content">
        <h3>Data Siswa</h3>
        <div class="box">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                        while($row = mysqli_fetch_array($list_peserta)){
                    ?>        
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail_peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" class="btn-cetak">Detail</a>  ||
                            <a href="hapus_peserta.php?id=<?php echo $row['id_pendaftaran'] ?> " onclick="return confirm('Yakin ?')" class="btn-cetak">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    
</body>
</html>