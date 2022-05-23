<!--Sesuaikan dengan isi field pada table yang digunakan-->

<?php
$koneksi= new mysqli ("localhost","root","","dbdarah");


$nama  		         = $_POST['nama'];
$no_hp		         = $_POST['no_hp'];
$alamat              = $_POST['alamat'];
$riwayat_penyakit    = $_POST['riwayat_penyakit'];
$jenis_kelamin    	 = $_POST['jenis_kelamin'];
$golongan_darah      = $_POST['golongan_darah'];




$sql = "INSERT INTO tb_pendonor
        ( nama, no_hp, alamat, riwayat_penyakit, jenis_kelamin, golongan_darah)
        VALUES
        ('$nama', '$no_hp', '$alamat', '$riwayat_penyakit', '$jenis_kelamin', '$golongan_darah')
        ";

$koneksi->query($sql);

header("Location:home.php");
?>
