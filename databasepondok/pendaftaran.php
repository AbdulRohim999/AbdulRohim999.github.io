<?php
    include 'proses_login.php';

    if(isset($_POST['submit'])){

        // ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generatedId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        
        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
            '".$generatedId."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['prgm_pendidikan']."',
            '".$_POST['nm_peserta']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['almt_peserta']."'
        )");

    if($insert){
        echo '<script>window.location="berhasil.php?id='.$generatedId.'"</script>';
    }else{
        echo 'Gagal Mendaftar' .mysqli_error($conn);
    }

    }


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- My CSS -->

    <title>Ma’had Abdullah Ibnu Mas’ud</title>

    <title>Pendaftaran Ma’had Abdullah Ibnu Mas’ud</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>

<nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #09e226">
    <div class="container">
      <a class="navbar-brand" href="#">Ma’had Abdullah Ibnu Mas’ud</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendidikan.html">Pendidikan</a>
          </li>
          <li class="nav-item">
            <a class="button" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<body>
    <!-- Box Formulir -->
    <section class="box-formulir">
        <h2>Formulir Pendaftaran Siswa Baru Ma’had Abdullah Ibnu Mas’ud</h2>

        <!-- Bagian Form -->
        <form action="" method="post">

            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2023/2024" readonly>
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
                            <input type="text" name="nm_peserta" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
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
                            <textarea class="input-control" name="almt_peserta"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        </td>
                    </tr>
                    
                </table>
            </div>

        </form>

    </section>
    
</body>
</html>