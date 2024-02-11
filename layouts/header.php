<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../vendor/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid frame-navbar">
      <a class="navbar-brand" href="../index.php">Aplikasi Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <?php 
          if ($_SESSION['login'] == 'admin') { ?>
            <a class="nav-link" href="index.php?page=tanggapan" style="color: white;">Data Tanggapan</a>
            <a class="nav-link" href="index.php?page=pengaduan" style="color: white;">Data Pengaduan</a>
            <a class="nav-link" href="index.php?page=masyarakat" style="color: white;">Data Masyarakat</a>
            <a class="nav-link" href="index.php?page=petugas" style="color: white;">Data Petugas</a>
            <a class="nav-link" href="../config/aksi_logout.php" style="color: white;">Keluar</a>
            
          <?php } elseif ($_SESSION['login'] == 'petugas') { ?>
            <a class="nav-link" href="index.php?page=tanggapan" style="color: white;">Data Tanggapan</a>
            <a class="nav-link" href="index.php?page=pengaduan" style="color: white;">Data Pengaduan</a>
            <a class="nav-link" href="../config/aksi_logout.php" style="color: white;">Keluar</a>

          <?php } elseif ($_SESSION['login'] == 'masyarakat') { ?>
            <a class="nav-link" href="../config/aksi_logout.php" style="color: white;">Keluar</a>

          <?php } else { ?>
            <a class="nav-link" href="index.php?page=registrasi" style="color: white;">Daftar Akun</a>
            <a class="nav-link" href="index.php?page=login" style="color: white;">Login</a>
            
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>