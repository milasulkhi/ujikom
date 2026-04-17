<?php
include '../config/koneksi.php';

mysqli_query($conn, "DELETE FROM dashboard WHERE id=$_GET[id]");

// header("Location: ../views/data.php");
header("Location: ../views/data.php?pesan=hapus");
?>