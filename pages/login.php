<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">

</head>
<body>
	
	<br>
	<div>
		
		<div class="loginbox">
			<img src="../images/logo-smanda.png" class="avatar">
			<h2>Login</h2>
			<form method="post">
				<p>Email</p>
				<input type="email" class="" name="email" size="40" placeholder="Masukkan email">
				<p>Password</p>
				<input type="password" class="" name="password" size="40" placeholder="Masukkan password"><br><br>
				<input type="submit" name="login" value="Login"><br>
				<a href="registrasi.php" class="daftar">Belum punya akun ?  Daftar</a>
			</form>

		</div>

		<?php
		//jika ada tombol login 
		if(isset($_POST["login"]))
		{

			$email = $_POST["email"];
			$password = $_POST["password"];
			//lakukan query mengecek akun di tabel user di db
			$data = mysqli_query($db,"SELECT * FROM users WHERE email_users='$email'
				AND password_users ='$password'");


			//ngitung akun yg terambil
			$akunbenar = mysqli_num_rows($data);

			//jika 1 akun cocok maka login
			if($akunbenar==1)
			{
				//anda login
				$akun = mysqli_fetch_assoc($data);
				if($akun['roles'] == "Administrator"){
					echo "<script>alert('Anda berhasil login admin')</script>";
					echo "<script>location='home-admin.php';</script>";
				}else{
					echo "<script>alert('Anda berhasil login user')</script>";
					echo "<script>location='home.php';</script>";
				}
			}
			else
			{
				//anda gagal login
				echo "<script>alert('Anda gagal login')</script>";
				echo "<script>location='login.php';</script>";
			}
		}
		?>

</body>
</html>