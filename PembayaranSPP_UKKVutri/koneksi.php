<?php
$koneksi = mysqli_connect('localhost','root','','dbspp_12rpl2v');

if(!$koneksi){
    echo"koneksi anda gagal";
}

function registrasi($data){
    global $koneksi;

    $namaPetugas = $data["nama"];
    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $level = $data["level"];

    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM petugas WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ){
        echo"<script>
        alert('username sudah terdaftar!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO petugas VALUES('','$username','$password','$namaPetugas','$level')");
    return mysqli_affected_rows($koneksi);

}

function editPetugas($data){
    global $koneksi;

    $id_petugas = $_GET['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama_petugas'];
    $level = $_POST['level'];
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE petugas SET nama_petugas='$nama', username='$username', password='$password', level='$level' WHERE id_petugas='$id_petugas'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header("Location:?url=petugas");
    }else{
        echo"<script>
        alert('maaf data tidak tersimpan!');
        window.location.assign('?url=petugas');
        </script>";
    }
}
?>