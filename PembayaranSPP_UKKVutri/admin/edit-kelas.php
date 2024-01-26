<?php
$id_spp = $_GET['id_kelas'];
include '../koneksi.php';
$sql = "SELECT * FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>

<h5>Halaman Edit Data Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>" method="post">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['nama_kelas'] ?>" type="text" name="kelas" class="form-control" required>
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