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
    <title>Edit Data Siswa</title>
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

    <!-- Box Formulir -->
    <section class="box-formulir">
        <h2>Edit Formulir Pendaftaran Siswa Baru</h2>

        <!-- Bagian Form -->
        <form action="" method="post">

            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="<?php echo $p->th_ajaran ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Program Pendidikan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="prgm_pendidikan">
                                <option value="">--Pilih--</option>
                                <option value="Program Karantina Tahfizh Plus Intensif">Program Karantina Tahfizh Plus Intensif</option>
                                <option value="Program Formal Salafiyah Wustha (Tingkat  SMP)">Program Formal Salafiyah Wustha (Tingkat  SMP)</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Data Diri Calon Siswa</h3>

            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_peserta" class="input-control" value="<?php echo $p->nm_peserta ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control" value="<?php echo $p->tmp_lahir ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control" value="<?php echo $p->tgl_lahir  ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="" value="Laki-laki"> Laki-laki &nbsp;&nbsp;
                            <input type="radio" name="jk" class="" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea name="almt_peserta" class="input-control" value="<?php echo $p->almt_peserta ?>"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="update" class="btn-daftar" value="Update Data">
                        </td>
                    </tr>
                    
                </table>
            </div>

        </form>

    </section>
    
</body>
</html>