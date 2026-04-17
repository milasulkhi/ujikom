<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- NAVBAR (SAMA) -->
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

  <!-- SIDEBAR (SAMA) -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
      <nav>
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
      </nav>
    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content-wrapper p-3">

    <h3>Data Dashboard</h3>

    <a href="tambah.php" class="btn btn-success mb-2">Tambah Data</a>

    <table class="table table-bordered">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>

      <?php
      $no = 1;
      $data = mysqli_query($conn, "SELECT * FROM dashboard");

      while ($d = mysqli_fetch_assoc($data)) {
      ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['nama'] ?></td>
        <td><?= $d['keterangan'] ?></td>
        <td>
          <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="../process/hapus.php?id=<?= $d['id'] ?>" class="btn btn-danger btn-sm"
          onclick="return confirm('Yakin ingin menghapus data ini?')"> delete </a> 
          <!-- <button class="btn btn-danger btn-sm" onclick="hapusData(<?= $d['id'] ?>)">
            Hapus
          </button> -->
        </td>
      </tr>
      <?php } ?>
    </table>

  </div>

</div>
<script>
function hapusData(id) {
  Swal.fire({
    title: 'Yakin?',
    text: "Data akan dihapus permanen!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Ya, hapus!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = '../process/hapus.php?id=' + id;
    }
  });
}
</script>
<?php if(isset($_GET['pesan'])) { ?>
<script>
let pesan = "<?= $_GET['pesan'] ?>";

if(pesan == "tambah"){
  Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: 'Data berhasil ditambahkan'
  });
}

if(pesan == "edit"){
  Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: 'Data berhasil diupdate'
  });
}

if(pesan == "hapus"){
  Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: 'Data berhasil dihapus'
  });
}
</script>
<?php } ?>
</body>
</html>