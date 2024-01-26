<?php
include '../koneksi.php';

$kelas = $_POST['kelas'];
$kompetensi = $_POST['kompetensi'];

$sql = "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) VALUES ('$kelas','$kompetensi')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>
        alert('Maaf Data Tidak Tersimpan!');
        window.location.assign('?url=kelas);
        </script>";
}
