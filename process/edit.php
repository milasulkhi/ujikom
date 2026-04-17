<?php
include '../config/koneksi.php';

mysqli_query($conn, "UPDATE dashboard SET 
nama='$_POST[nama]',
keterangan='$_POST[ket]'
WHERE id=$_GET[id]");

// header("Location: ../views/data.php");
header("Location: ../views/data.php?pesan=edit");
?>