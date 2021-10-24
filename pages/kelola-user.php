<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage user</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
        <h1 class="mt-4">Kelola Data User</h1><br>
        <div class="col-lg-12"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Data User</h3>
                </div>
                <a href="add-user.php" class="btn btn-primary">Tambah User</a>
                <a href="laporan-users.php" class="btn btn-primary" target="_blank">Export to PDF</a>
                </br></br>
            </div>
        <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Roles</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $no=1;
                $data=mysqli_query($db,"SELECT * FROM users");
                while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['email_users']; ?></td>
                    <td><?php echo $d['password_users']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['roles']; ?></td>
                    <td>
                        <a href="update-user.php?id_users=<?php echo $d['id_users']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete-user.php?id_users=<?php echo $d['id_users']; ?>" class="btn btn-danger">Hapus</a>
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
</body>
</html>