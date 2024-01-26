<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi, "SELECT*FROM petugas WHERE username='$username'");
$getUser = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
    // cek username
    if($getUser === 1){
        //cek password
        if( password_verify($password, $data["password"]) ){
        }
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];
    if($data['level']=='admin'){
        header('Location:admin/admin.php');
    }elseif($data['level']=='petugas'){
        header('Location:petugas/petugas.php');
    }
}
echo"<script>
alert('Login Gagal!');
window.Location.assign('index.php');
</script>";
?>