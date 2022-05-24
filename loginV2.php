<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "aboblood";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname) or die("Gagal koneksi ke server");


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $ambil = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    $cek_login = mysqli_num_rows($ambil);
    if (mysqli_num_rows($ambil) > 0) {
        echo "<script>
                alert('Username sudah terdaftar!');
                window.location.href='menu.html';
            </script>";
    } else {
        if ($password !== $password2) {
            echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
                window.location.href='loginV2.php';
            </script>";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', )");
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
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="bg.css">
</head>

<body>

    <section id="login" class="text-center">
        <div class="container">
            <h2>Masuk</h2>
        </div>
        <form action="" method="post">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>


                    <div class="col-md-6">
                        <label for="password">Password:</label>
                        <input type="Password" name="password" id="password" placeholder="*******">
                    </div>

                    <div class="col-md-6">
                        <button type="login" name="submit">Masuk</button></a>
                    </div>
                </div>
            </div>


        </form>
    </section>
</body>

</html>