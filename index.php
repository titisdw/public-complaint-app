<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vendor/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid frame-navbar">
      <a class="navbar-brand" href="index.php">Aplikasi Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=registrasi">Daftar Akun</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
      case 'login':
        include 'login.php';
        break;
      case 'registrasi';
        include 'registrasi.php';
        break;

      default:
        echo "Halaman Tidak Tersedia";
        break;
    }
  } else {
    include 'home.php';
  }
  ?>


  <footer class="footer py-2 mt-3">
    <div class="container-fluid">
      <p class="text-center">UKK PPLG 2024 | TITIS DWI WASONO | SMKN 5 MALANG</p>
    </div>

  </footer>

  <script src="vendor/bootstrap.bundle.min.js"></script>
</body>

</html>