<?php
include '../koneksi.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        header("Location:?url=petugas");
    } else {
        echo "<script>
        alert('Maaf Data Tidak Tersimpan!');
        window.location.assign('?url=petugas');
        </script>";
    }
}
?>

<h5>Halaman Tambah Data Petugas</h5>
<a href="?url=petugas" class="btn btn-primary">Kembali</a>
<hr>
<form action="" method="post">
    <div class="form-group mb-2">
        <label">Nama Petugas</label>
            <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label">Username</label>
            <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label">Password</label>
            <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label">Level</label>
            <select name="level" class="form-control">
                <option value="">Pilih Level Petugas</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
            </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>