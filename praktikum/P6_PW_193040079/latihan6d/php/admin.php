<?php
// menguhubungkan dengan file php lainnya
require 'function.php';

// melakukan query
$alat = query("SELECT * FROM alat_musik");


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

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
</head>
<body>
    <h2>INSTRUMENT Shop</h2>
    <div class="add">
        <a href="tambah.php" class="waves-effect green darken-3 btn">Tambah Data</a>
    </div>
    <br>
    <table class="highlight" border="1" cellpadding="13" cellspacing="0">
        <tr class="brown lighten-2">
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Warna</th>
            <th>Stock</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($alat as $musik) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $musik['id'] ?>" class="waves-effect lime darken-4 btn">Ubah</a>
                    <a href="hapus.php?id=<?= $musik['id'] ?>" onclick="return confirm('Hapus Data??')" class="waves-effect teal darken-4 btn" >Hapus</a>
                </td>
                <td><img src="../assets/img/<?= $musik["foto"]; ?>" width="300" alt=""></td>
                <td><?= $musik['nama']; ?></td>
                <td><?= $musik['jenis']; ?></td>
                <td><?= $musik['warna']; ?></td>
                <td><?= $musik['stock']; ?></td> 
                <td><?= $musik['harga']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>