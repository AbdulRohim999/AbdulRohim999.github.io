<?php
    session_start();
    include 'proses_login.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
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
        <h3>Detail Siswa</h3>
        <div class="box">
            <a href="edit_data.php?id=<?php echo $p->id_pendaftaran ?>" target="_blank" class="btn-kembali">Edit</a>   ||
            <a href="data_peserta.php" class="btn-kembali">Kembali</a>
            <table class="table-data" border="0">
                <tr>
                    <td>Kode Pendaftaram</td>
                    <td>:</td>
                    <td><?php echo $p->id_pendaftaran ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?php echo $p->th_ajaran ?></td>
                </tr>
                <tr>
                    <td>Program Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $p->prgm_pendidikan ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $p->nm_peserta ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $p->jk ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $p->almt_peserta ?></td>
                </tr>
            </table>

        </div>
    </section>
    
</body>
</html>