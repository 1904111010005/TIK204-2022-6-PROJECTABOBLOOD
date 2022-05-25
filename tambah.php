<?php

$conn = mysqli_connect("localhost", "root", "", "aboblood");

//cek apa tombol submit sudah di pencet
if (isset($_POST["submit"])) {
    //ambil data dari tiap elemen dalam form
    $nama = $_POST["nama"];
    $nomorhp = $_POST["hp"];
    $golongandarah = $_POST["goldarah"];

    //query insert data
    $query = "INSERT INTO kontak VALUES ('','$nama','$nomorhp','$golongandarah')";
    mysqli_query($conn, $query);

    //cek apakah data berhasil ditambahkan
    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'kontakpendonor.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'kontakpendonor.php';
            </script>
        ";
    }
}





?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Kontak Pendonor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="hp">Nomor Hp:</label>
                <input type="text" name="hp" id="hp" required>
            </li>
            <li>
                <label for="goldarah">Golongan Darah:</label>
                <input type="text" name="goldarah" id="goldarah" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
        </ul>




    </form>
</body>