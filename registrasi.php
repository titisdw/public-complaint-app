<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
                DAFTAR AKUN
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Telp</label>
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan No. Telp Anda" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
                    <a href="index.php?page=login" class="m-3">Sudah Punya Akun? Login Disini!</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'config/koneksi.php';

if (isset($_POST['kirim'])) {
    $nik = htmlspecialchars($_POST['nik']);
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
    $telp = htmlspecialchars($_POST['telp']);
    $level = 'masyarakat';

    $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");

    if ($query) {
        header('location:index.php?page=login');
    }
}
?>