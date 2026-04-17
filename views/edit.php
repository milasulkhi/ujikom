<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM dashboard WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data</title>

  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- 🔹 NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#">☰</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="../process/logout.php" class="btn btn-danger btn-sm">Logout</a>
      </li>
    </ul>
  </nav>

  <!-- 🔹 SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
      <ul class="nav nav-pills nav-sidebar flex-column">

        <li class="nav-item">
          <a href="dashboard.php" class="nav-link">
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="data.php" class="nav-link active">
            <p>Data</p>
          </a>
        </li>

      </ul>
    </div>
  </aside>

  <!-- 🔹 CONTENT -->
  <div class="content-wrapper p-3">

    <div class="card">
      <div class="card-header bg-warning">
        <h3 class="card-title">Edit Data</h3>
      </div>

      <div class="card-body">
        <form action="../process/edit.php?id=<?= $id ?>" method="POST">

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="ket" value="<?= $data['keterangan'] ?>" class="form-control" required>
          </div>

          <button class="btn btn-warning">Update</button>
          <a href="data.php" class="btn btn-secondary">Kembali</a>

        </form>
      </div>
    </div>

  </div>

</div>
</body>
</html>