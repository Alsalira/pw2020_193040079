<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
   require 'function.php';

   if (isset($_POST['tambah'])) {
       if (tambah($_POST) > 0) {
           echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
           </script>";
       } else {
           echo "<script>
                        alert('Data Gagal ditambahkan!');
                        document.location.href = 'admin.php';
           </script>";
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="../css/tambah.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
</head>
<body style="background-image: url(../assets/img/gambar2.jpg);">
<form action="" method="post" style="width: 400px; text-align: center; margin-left: 590px;">
    <div class="card-panel" style="border-radius: 20px; opacity: 0.9;">
        <div>
            <p style="font-size: 40px; color: #e6ee9c">Form Tambah Data</p>
        </div>
        <div class="input-field">
            <label for="foto">Foto :</label><br>
            <input type="text" name="foto" id="foto" required ><br><br>
        </div>
        <div class="input-field">
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </div>
        <div class="input-field">
            <label for="jenis">Jenis :</label><br>
            <input type="text" name="jenis" id="jenis" required><br><br>
        </div>
        <div class="input-field">
            <label for="warna">Warna :</label><br>
            <input type="text" name="warna" id="warna" required><br><br>
        </div>
        <div class="input-field">
            <label for="stock">Stock :</label><br>
            <input type="text" name="stock" id="stock" required><br><br>
        </div>
        <div class="input-field">
            <label for="harga">Harga : RP.</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </div>
        <br>
        <button type="submit" name="tambah" class="waves-effect blue darken-2 btn" style="border-radius: 30px;">Tambah Data</button>
        <button type="submit" class="waves-effect blue darken-2 btn" style="border-radius: 30px;">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
   </div>
</form>
</body>
</html>