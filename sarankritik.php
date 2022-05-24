<?php
$koneksi= new mysqli("localhost","root","","formulir_donordarah");

$sql    = "SELECT * FROM tb_saran";
$result = $koneksi->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran dan Kritik</title>
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    <link rel="stylesheet" href="sarankritik.css">
</head>
    <div class="wrapper">
        <!-- untuk home -->
        <form action="create_saran.php" method="post"> 
            <section id="home" >
                <img class="image1" src="assets/img/Rectangle 4.png" alt=""/>
                <div class="kolom">
                    <p class="deskripsi">Saran dan Kritik</p>
                    <h2>Nama</h2>
                    <h1>Nomor Handphone</h1>
                    <h4>Saran/Kritik</h4>
                    <!-- <h3><a href="menu.html" class="btn-daftar">Kirim</a></h3> -->
                </div>

                <input class="form-control-nama" type="text" name="nama" placeholder="" aria-label="">
                <input class="form-control-hp" type="text" name="no_hp" placeholder="" aria-label="">
                <input class="form-control-saran" type="text" name="saran_kritik" placeholder="" aria-label="">
                <button class="btn-daftar" type="submit">Kirim</button>
            </section>
        </form>
    </div>
</body>
</html>