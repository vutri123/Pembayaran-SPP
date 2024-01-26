<h5>Halaman Tambah Data Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form action="?url=proses-tambah-kelas" method="post">
    <div class="form-group mb-2">
        <label">Nama Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label">Kompetensi Keahlian</label>
            <input type="text" name="kompetensi" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>