<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">SMAN 1 PANDAAN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar.php">Join Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-6">
    <h3 class="my-4">Form Pendaftaran Siswa Baru</h3>
    <div class="container">
	<form method="post">
            <div class="form-grup">
                <label>Nama Lengkap</label><br>
                <input type="text" name="nama_siswa" placeholder="Masukkan nama lengkap" class="form-control" required><br>
            </div>
            <div class="form-grup">
                <label>Jenis Kelamin</label><br>
                <select class="form-control" name="jk">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-grup">
                <label>Alamat</label><br>
                <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control" required><br>
            </div>
            <div class="form-grup">
                <label>Tempat Tanggal Lahir</label><br>
                <input type="text" name="ttl" placeholder="Tempat, dd-mm-yyyy" class="form-control" required><br>
            </div>
            <div class="form-grup">
                <label>Agama</label><br>
                <select class="form-control" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div><br>
            <div class="form-grup">
                <label>Nilai</label><br>
                <input type="number" name="nilai" placeholder="Masukkan nilai" class="form-control" required><br>
            </div>
            <div class="form-grup">
                <label>Telepon</label><br>
                <input type="text" name="telepon" placeholder="Masukkan telepon" class="form-control" required><br><br>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>
        </form>
	<?php
	if(isset(($_POST['submit'])))
	{
		mysqli_query($db,"INSERT INTO siswa (nama_siswa,jk,alamat,ttl,agama,nilai,telepon) 
		VALUES('$_POST[nama_siswa]','$_POST[jk]','$_POST[alamat]','$_POST[ttl]','$_POST[agama]','$_POST[nilai]','$_POST[telepon]')");	
		echo "<script>alert('Berhasil melakukan pendaftaran');</script>";
		echo "<script>location='daftar-berhasil.php';</script>";
	}
	?>
    </div>
  </div>

</body>

</html>
