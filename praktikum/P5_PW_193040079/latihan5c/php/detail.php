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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alat Musik</title>
</head>
<body>
    <div class="container">
       <div class="gambar">
        <img src="../assets/img/<?= $alat["foto"]; ?>" width="500" alt="">
       </div>
       <div class="keterangan">
        <p>Nama : <?= $alat["nama"]; ?></p>
        <p>Jenis : <?= $alat["jenis"]; ?></p>
        <p>Warna : <?= $alat["warna"]; ?></p>
        <p>Strock : <?= $alat["stock"]; ?></p>
        <p>Harga : RP.<?= $alat["harga"]; ?></p>
       </div>

       <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
