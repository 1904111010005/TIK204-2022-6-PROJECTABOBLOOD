<?php
$koneksi= new mysqli ("localhost","root","","formulir_donordarah");


$nama  		         = $_POST['nama'];
$no_hp		         = $_POST['no_hp'];
$saran_kritik        = $_POST['saran_kritik'];





$sql = "INSERT INTO tb_saran
        ( nama, no_hp, saran_kritik)
        VALUES
        ('$nama', '$no_hp', '$saran_kritik')
        ";

$koneksi->query($sql);

header("Location:index.html");
?>