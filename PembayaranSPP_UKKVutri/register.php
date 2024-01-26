<?php
require 'koneksi.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        window.location.assign('index.php');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3>Register</h3>
        <div class="card mt-2">
            <div class="card-body">
                <!-- isi web -->
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <label for="nama">Nama Petugas</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <select name="level" class="form-control">
                            <option value="">Pilih Level Petugas</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="register" class="btn btn-primary">Register!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>