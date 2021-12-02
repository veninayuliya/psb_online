<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="../css/simple.sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Manage Dashboard</div>
      <div class="list-group list-group-flush">
        <a href="kelola-user.php" class="list-group-item list-group-item-action bg-light">Data User</a>
        <a href="kelola-pendaftaran.php" class="list-group-item list-group-item-action bg-light">Data Pendaftaran</a>
      </div>
    </div>

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home-admin.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a></li> 
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Kelola Data Pendaftaran</h1><br>
        <div class="col-lg-12"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Data Pendaftaran</h3>
                </div>
                <a href="add-daftar.php" class="btn btn-primary">Tambah Data</a>
                <a href="laporan-daftar.php" class="btn btn-primary" target="_blank">Export to PDF</a>
                </br></br>
            </div>
        <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>TTL</th>
                        <th>Agama</th>
                        <th>Nilai</th>
                        <th>Telepon</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $no=1;
                $data=mysqli_query($db,"SELECT * FROM siswa");
                while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_siswa']; ?></td>
                    <td><?php echo $d['jk']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['ttl']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['nilai']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['statuss']; ?></td>
                    <td>
                        <a href="update-daftar.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete-daftar.php?id_siswa=<?php echo $d['id_siswa']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
                </br></br>
            </div>
        </div>
      </div>
      </div>
    </div>
</body>

</html>