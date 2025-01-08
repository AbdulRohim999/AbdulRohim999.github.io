<?php
    include 'proses_login.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ma’had Abdullah Ibnu Mas’ud</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
    <!-- Box Formulir -->
    <section class="box-formulir">
        <h2>Pendaftaran Berhasil</h2>
        <div class="box">
            <h4>Kode Pendaftaran Anda Adalah <?php echo $_GET['id'] ?> </h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
            <a href="index.html" class="btn-kembali">Kembali</a>
        </div>

    </section>
    
</body>
</html>