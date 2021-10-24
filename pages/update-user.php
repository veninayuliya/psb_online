<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit User</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">Kelola User</a>
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
        <h2>Update Data User</h2><br><br>
            <?php
            include '../koneksi.php';
            $data = mysqli_query($db,"SELECT * FROM users WHERE id_users='$_GET[id_users]'");
            $d = mysqli_fetch_array($data);
            ?>
        <form method="post">
            <div class="form-grup">
                <label>Email</label><br>
                <input type="email" name="email" class = "form-control" value="<?php echo $d['email_users'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Password</label><br>
                <input type="password" name="password" class = "form-control" value="<?php echo $d['password_users'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Nama</label><br>
                <input type="text" name="nama" class = "form-control" value="<?php echo $d['nama'];?>" required><br>
            </div>
            <div class="form-grup">
                <label>Telepon</label><br>
                <input type="text" name="telepon" class = "form-control" value="<?php echo $d['telepon'];?>" required>
            </div>
            <div class="form-group">
                <label>Roles</label>
                <select type="text" name="roles" class="form-control" value="<?php echo $d['roles'];?>" required>
                <option>User</option>
                <option>Administrator</option>
                </select>
                <br>
            </div><br><br>
		<button class="btn btn-primary" name="update">Update</button>
        </form>
        <br><br><br>
        <?php
        if(isset(($_POST['update'])))
        {
            mysqli_query($db,"UPDATE users SET email_users=
            '$_POST[email]',password_users='$_POST[password]',nama='$_POST[nama]',telepon='$_POST[telepon]',roles='$_POST[roles]' WHERE id_users='$_GET[id_users]'");	

            echo "<script>alert('Data user telah diupdate');</script>";
            echo "<script>location='kelola-user.php';</script>";
        }
        ?>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>