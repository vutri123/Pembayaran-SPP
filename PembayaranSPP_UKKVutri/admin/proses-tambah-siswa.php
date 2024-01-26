<?php
include '../koneksi.php';

$nisn = $_GET['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$id_spp = $_POST['id_spp'];

$sql = "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES ('$nisn','$nis','$nama','$kelas','$alamat','$no_hp','$id_spp')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>
        alert('Maaf Data Tidak Tersimpan!');
        window.location.assign('?url=siswa);
        </script>";
}
