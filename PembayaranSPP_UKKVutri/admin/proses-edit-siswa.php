<?php
include '../koneksi.php';

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$id_spp = $_POST['id_spp'];

$sql = "UPDATE siswa SET nis='$nis', nama='$nama', id_kelas='$kelas', alamat='$alamat', no_telp='$no_telp', id_spp='$id_spp', WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan!');
    window.location.assign('?url=siswa');
    </script>";
}
