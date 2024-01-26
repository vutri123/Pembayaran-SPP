<?php
include '../koneksi.php';
$id_spp = $_GET['id_spp'];
$tahun = $_GET['tahun'];
$nominal = $_GET['nominal'];

$sql = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=spp");
}else{
    echo"<script>
    alert('Maaf Data Tidak Tersimpan!');
    window.location.assign('?url=spp');
    </script>";
}
?>