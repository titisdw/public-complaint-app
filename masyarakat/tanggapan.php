<?php 
include '../config/koneksi.php';
if (!empty($_GET['id_pengaduan'])) {
    $id = $_GET['id_pengaduan'];
    $query = mysqli_query($koneksi, "SELECT a.*, b.* FROM pengaduan a INNER JOIN tanggapan b ON a.id_pengaduan=b.id_pengaduan WHERE b.id_pengaduan=$id");
    $data = mysqli_fetch_array($query);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    TANGGAPAN
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Judul Laporan</label>
                            <input type="text" class="form-control" value="<?php echo $data['judul_laporan'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Isi Laporan</label>
                            <textarea class="form-control" value="" readonly><?php echo $data['isi_laporan'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <img src="../assets/image/<?php echo $data['foto'] ?>" alt="" class="form-control" style="width: 150px;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggapan</label>
                            <textarea class="form-control" readonly><?php echo $data['tanggapan'] ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="index.php" class="btn btn-primary">KEMBALI</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php } else {
    echo "Halaman Tidak Tersedia";
} ?>