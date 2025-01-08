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
            <li><a class="button" href="beranda.php">Beranda</a></li>
            <li><a href="data_peserta.php">Data Siswa</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <!-- content -->

    <section class="content">
        <h3>Beranda</h3>
        <div class="box">
            <h4><?php echo $_SESSION['nama'] ?>, Selamat Datang Di Halaman Ma’had Abdullah Ibnu Mas’ud </h4>
            <br>
            <p>
              Pondok Pesantren Ma’had Abdullah Ibnu Mas’ud adalah lembaga pendidikan Islam swasta (non-pemerintah). Dengan sistem kurikulum yang terpadu, pendidikan berasrama serta pengajaran bahasa Arab dan Inggris secara intensif. Dengan
              didukung oleh lingkungan yang asri, Pondok Pesantren Ma’had Abdullah Ibnu Mas’ud berupaya untuk mencetak manusia yang muttafaqoh fiddin untuk menjadi kader pemimpin umat/bangsa, selalu mengupayakan terciptanya pendidikan
              santri yang memiliki jiwa keikhlasan, kesederhanaan, kemandirian, ukhuwah Islamiyah, kebebasan berfikir dan berperilaku atas dasar Al-Quran dan Sunnah Rasulullah SAW untuk meningkatkan taqwa kepada Allah SWT. Pengelolaan
              pendidikan dan pengajaran serta kegiatan santri sehari-hari dilaksanakan oleh para guru/ustadz dengan latar belakang pendidikan dari berbagai perguruan tinggi dan pesantren modern, yang sebagian besar tinggal di asrama dan
              secara penuh mengawasi serta membimbing santri dalam proses kegiatan belajar mengajar dan kepengasuhan santri.
            </p>

        </div>
    </section>
    
</body>
</html>