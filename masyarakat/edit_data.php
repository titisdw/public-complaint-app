<?php 
include '../config/koneksi.php';
session_start();

if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = htmlspecialchars($_POST['id_pengaduan']);
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan");
    $data = mysqli_fetch_array($query);

    if (is_file('../assets/image/'.$data['foto'])) {
        unlink('../assets/image/'.$data['foto']);
        mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
        header('location:index.php');
    }
}
?>