<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['id'];

    $alat = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!-- my Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Condiment&family=Lateef&family=Lovers+Quarrel&family=Rock+Salt&family=Sacramento&display=swap" rel="stylesheet">


       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/admin.css">
       <link rel="stylesheet" type="text/css" href="../css/detail.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
</head>
<body>
    <div class="container">
    <div class="card-panel">
       <div class="gambar">
        <img src="../assets/img/<?= $alat["foto"]; ?>" width="500" alt="">
       </div>
       <hr>
       <div class="keterangan" style="font-family: Lateef; font-size: 25px;">
        <p>Nama : <?= $alat["nama"]; ?></p>
        <p>Jenis : <?= $alat["jenis"]; ?></p>
        <p>Warna : <?= $alat["warna"]; ?></p>
        <p>Stock : <?= $alat["stock"]; ?></p>
        <p>Harga : RP.<?= $alat["harga"]; ?></p>
       </div>

       <a href="../index.php" class="waves-effect green darken-4 btn" style="border-radius: 17px;">Kembali</a>
    </div>
    </div>
</body>
</html>
