<?php
$koneksi= new mysqli ("localhost","root","","dbdarah");

$sql    = "SELECT * FROM tb_pasien";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Butuh Darah.</title>
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    <link rel="stylesheet" href="formulirpasien.css">
</head>
    <div class="wrapper">
        <!-- untuk home -->
        <form action="create_pasien.php" method="post">
            <section id="home">
                <img class="image1" src="assets/img/Rectangle 4.png" alt=""/>
                <div class="kolom">
                    <p class="deskripsi">Formulir Butuh Darah</p>
                    <h2>Nama</h2>
                    <h1>Nomor Handphone</h1>
                    <h4>Alamat</h4>
                    <h6>Jenis Kelamin</h6>
                    <h5>Golongan Darah</h5>
                    <h3>Riwayat Penyakit</h3>
                    
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita">
                    <label class="form-check-label" for="jenis_kelamin">Wanita</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria">
                    <label class="form-check-label" for="jenis_kelamin">Pria</label>
                </div>

                <select class="form-select form-select-sm" required name="golongan_darah">
                    <option selected>Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>

                <input class="form-control-nama" type="text" name="nama" placeholder="Nama Lengkap" aria-label="Nama Lengkap">
                <input class="form-control-hp" type="text" name="no_hp" placeholder="No Handphone" aria-label="Nomor Handphone">
                <input class="form-control-alamat" type="text" name="alamat" placeholder="Alamat" aria-label="Alamat Lengkap">
                <input class="form-control-riwayat" type="text" name="riwayat_penyakit" placeholder="Riwayat Penyakit" aria-label="Riwayat Penyakit">

               
                <button class="btn-daftar" type="submit">Save</button>
            </section>
        </form>
    </div>
</body>
</html>