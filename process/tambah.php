<?php
include '../config/koneksi.php';

mysqli_query($conn, "INSERT INTO dashboard(nama,keterangan) 
VALUES('$_POST[nama]','$_POST[ket]')");

// header("Location: ../views/data.php");
header("Location: ../views/data.php?pesan=tambah");
?>