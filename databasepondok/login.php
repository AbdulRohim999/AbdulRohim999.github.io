<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Ma’had Abdullah Ibnu Mas’ud</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="bg-login">
	<div class=box-login>
		<h2>Login Siswa</h2>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" placeholder="Login" class="btn_login">
			<a href="index.html" class="btn-kembali">Kembali</a>
		</form>
		<?php
		session_start();

			if(isset($_POST['submit'])){
				include 'proses_login.php';

				$user = $_POST['user'];
				$pass = $_POST['pass'];

				$cek = mysqli_query($conn, "SELECT * FROM admin_pondok WHERE username = '".$user."' AND password = '".$pass."'");
				if(mysqli_num_rows($cek) > 0){
					$a = mysqli_fetch_object($cek);

					$_SESSION['stat_login'] = true;
					$_SESSION['id_pondok'] = $a->admin_id;
					$_SESSION['nama'] = $a->nama_admin;
					echo '<script>window.location="beranda.php"</script>';
				}else{
					echo '<script>alert("Gagal, Username atau Password salah")</script>';
				}
			}
		?>	
	</div>
	
</body>
</html>