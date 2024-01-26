<?php
include '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$kelas = $_GET['kelas'];
$kompetensi = $_GET['kompetensi'];

$sql = "UPDATE kelas SET nama_kelas='$kelas', kompetensi_keahlian='$kompetensi' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>
    alert('Maaf Data Tidak Tersimpan!');
    window.location.assign('?url=kelas');
    </script>";
}
?>