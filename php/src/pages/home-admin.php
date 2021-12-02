<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage</title>

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
              <a class="nav-link" href="home-admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a></li> 
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Halaman Kelola</h1>
        <p>Hanya admin yang dapat mengakses halaman ini dan mengelola data.</p>
      </div>
      
    </div>
</body>

</html>