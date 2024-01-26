<?php
include '../koneksi.php';

$id_petugas = $_GET['id_petugas'];

$sql = "SELECT * FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

// ketika tombol simpan ditekan
if (isset($_POST["update"])) {
    if (editPetugas($_POST) > 0) {
    } else {
        echo "<script>
        alert('Maaf Data Tidak Tersimpan!');
        window.location.assign('?url=petugas');
        </script>";
    }
}
?>

<h5>Halaman Edit Data Petugas</h5>
<a href="?url=petugas" class="btn btn-primary">Kembali</a>
<hr>
<form action="" method="post">
    <div class="form-group mb-2">
        <label>Nama Petugas</label>
        <input value="<?= $data['nama_petugas'] ?>" type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Kompetensi Keahlian</label>
        <input value="<?= $data['kompetensi_keahlian'] ?>" type="text" name="kompetensi" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>