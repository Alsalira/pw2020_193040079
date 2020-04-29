<?php 
   require 'function.php';

    $id = $_GET['id'];
    $musik = query("SELECT * FROM alat_musik WHERE id = $id")[0];

   if (isset($_POST['ubah'])) {
       if (ubah($_POST) > 0) {
           echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
           </script>";
       } else {
           echo "<script>
                        alert('Data Gagal diubah!');
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
       <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/admin.css">
       <link rel="stylesheet" type="text/css" href="../css/ubah.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
</head>
<body>
<h3>Form Ubah Data Alat Musik</h3>
<form action="" method="post">
    <div class="card-panel">
    <input type="hidden" name="id" id="id" value="<?= $musik['id']; ?>">
        <div class="input-field">
            <label for="foto">Foto :</label><br>
            <input type="text" name="foto" id="foto" required value="<?= $musik['foto']; ?>"><br><br>
        </div>
        <div class="input-field"> 
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $musik['nama']; ?>"><br><br>
        </div>
        <div class="input-field">
            <label for="jenis">Jenis :</label><br>
            <input type="text" name="jenis" id="jenis" required value="<?= $musik['jenis']; ?>"><br><br>
        </div>
        <div class="input-field">
            <label for="warna">Warna :</label><br>
            <input type="text" name="warna" id="warna" required value="<?= $musik['warna']; ?>"><br><br>
        </div>
        <div class="input-field">
            <label for="stock">Stock :</label><br>
            <input type="text" name="stock" id="stock" required value="<?= $musik['stock']; ?>"><br><br>
        </div>
        <div class="input-field">
            <label for="harga">Harga : RP.</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $musik['harga']; ?>"><br><br>
        </div>
        <br>
        <button type="submit" name="ubah" class="waves-effect green darken-4 btn">Ubah Data!</button>
        <button type="submit" class="waves-effect green darken-4 btn">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
   </div>
</form>
    
</body>
</html>