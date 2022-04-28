<?php
require 'function.php';
// ambil data kontak pendonor
$kontak = query("SELECT * FROM dbkontak");


// tampilkan data(fetch) dari dbkontak 
// mysqli_fetch_row() = Mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array associative
// mysqli_fetch_array() = Mengembalikan keduanya
// mysqli_fetch_object() = Mengembalikan array object
// $li = mysqli_fetch_assoc($result);
// var_dump($li);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Pendonor</title>
</head>
<body>
    <h1>Kontak Pendonor</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Nomor Hp</th>
            <th>Golongah Darah</th>
        </tr>

        <?php foreach( $kontak as $row) : ?>
        <tr>
            <td><?= $row["Nama"]?></td>
            <td><?= $row["Nomor Hp"]?></td>
            <td><?= $row["Golongan Darah"]?></td>  
        </tr>
        <?php endforeach; ?>
        
</body>
</html>