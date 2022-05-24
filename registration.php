<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "aboblood";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname) or die("Gagal koneksi ke server");

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  $email = $_POST["email"];
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];

  $cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
  $cek_login = mysqli_num_rows($cek_user);
  if (mysqli_num_rows($cek_user) > 0) {
    echo "<script>
                alert('Username sudah terdaftar!');
                window.location.href='registration.php';
            </script>";
  } else {
    if ($password !== $password2) {
      echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
                window.location.href='registration.php';
            </script>";
    } else {
      $password = password_hash($password, PASSWORD_DEFAULT);
      mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', '$email' , '$nama' , '$alamat')");
      echo "<script>
                alert('Registrasi berhasil!');
                window.location.href='loginV2.php';
            </script>";
    }
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bg.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center">Registration</h1>
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>

          <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" name="nama" id="nama" class="form-control">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
          </div>

          <div class="form-group">
            <label for="handphone">No Handphone</label>
            <input type="text" name="handphone" id="handphone" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" id="password2" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>