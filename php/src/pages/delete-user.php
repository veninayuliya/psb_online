<?php
include '../koneksi.php';

mysqli_query($db,"DELETE FROM users WHERE id_users='$_GET[id_users]'");

echo "<script>alert('Data user terhapus');</script>";
echo "<script>location='kelola-user.php';</script>";
?>