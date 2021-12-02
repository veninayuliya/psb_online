<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">Kelola Pendaftaran</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="kelola-user.php">Kelola</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a></li> 
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-md-6"><br>
        <h2>Update Data Pendaftaran</h2><br><br>
            <?php
            include '../koneksi.php';
            $data = mysqli_query($db,"SELECT * FROM siswa WHERE id_siswa='$_GET[id_siswa]'");
            $d = mysqli_fetch_array($data);
            ?>
        <form method="post">
            <div class="form-grup">
                <label>Nama Lengkap</label><br>
                <input type="text" name="nama_siswa" class="form-control" value="<?php echo $d['nama_siswa'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Jenis Kelamin</label><br>
                <select class="form-control" name="jk" value="<?php echo $d['jk'];?>">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div><br>
            <div class="form-grup">
                <label>Alamat</label><br>
                <input type="text" name="alamat" placeholder="Masukkan alamat" class="form-control" value="<?php echo $d['alamat'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Tempat Tanggal Lahir</label><br>
                <input type="text" name="ttl" placeholder="Tempat, dd-mm-yyyy" class="form-control" value="<?php echo $d['ttl'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Agama</label><br>
                <select class="form-control" name="agama" value="<?php echo $d['agama'];?>">
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
                <input type="number" name="nilai" placeholder="Masukkan nilai" class="form-control" value="<?php echo $d['nilai'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Telepon</label><br>
                <input type="text" name="telepon" placeholder="Masukkan telepon" class="form-control" value="<?php echo $d['telepon'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Status</label><br>
                <select class="form-control" name="statuss" value="<?php echo $d['statuss'];?>">
                    <option value="Tidak Diterima">Tidak Diterima</option>
                    <option value="Cadangan">Cadangan</option>
                    <option value="Diterima">Diterima</option>
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
        </form>
        <br><br><br>
        <?php
        if(isset(($_POST['update'])))
        {
            mysqli_query($db,"UPDATE siswa SET nama_siswa=
            '$_POST[nama_siswa]',jk='$_POST[jk]',alamat='$_POST[alamat]',ttl='$_POST[ttl]',
            agama='$_POST[agama]',nilai='$_POST[nilai]',statuss='$_POST[statuss]' WHERE id_siswa='$_GET[id_siswa]'");	

            echo "<script>alert('Data pendaftaran telah diupdate');</script>";
            echo "<script>location='kelola-pendaftaran.php';</script>";
        }
        ?>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>