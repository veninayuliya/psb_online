<?php
include '../koneksi.php';


mysqli_query($db,"DELETE FROM siswa WHERE id_siswa='$_GET[id_siswa]'");

echo "<script>alert('Data pendaftaran terhapus');</script>";
echo "<script>location='kelola-pendaftaran.php';</script>";
?>