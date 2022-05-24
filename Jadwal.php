<?php
//koneksi ke database
$dj = mysqli_connect("localhost","root","","aboblood");
 // ambil data kontak pendonor
 $result = mysqli_query( $dj,"SELECT * FROM Jadwal");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Jadwal Donor</title>
    <link rel="stylesheet" type="text/css" href="kontak.css">
</head>

<body>
    <h1>Informasi Jadwal Donor</h1>
    <a href="menu.html"><img class="size1" src="kembali.svg"></a>
    <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Hari Dan Tanggal</th>
            <th>Jam</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row["No"]?></td>
            <td><?= $row["Hari Dan Tanggal"]?></td>
            <td><?= $row["Jam"]?></td>
        </tr>
        <?php endwhile; ?>

</body>

</html>