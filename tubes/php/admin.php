<?php
// menguhubungkan dengan file php lainnya
require 'function.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $alat = query("SELECT * FROM alat_musik WHERE
        nama LIKE '%$keyword%'OR
        jenis LIKE '%$keyword%'OR
        warna LIKE '%$keyword%'OR
        stock LIKE '%$keyword%'OR
        harga LIKE '%$keyword%'
    ");
} else {
    $alat = query("SELECT * FROM alat_musik");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

     <!-- my fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Condiment&family=Lateef&family=Lovers+Quarrel&family=Rock+Salt&family=Sacramento&display=swap" rel="stylesheet">

       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="../css/admin.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
</head>
<body style="background-image: url(../assets/img/foto10.jpg);">
    <h2 style="color: #dce775; font-family: Cinzel;">INSTRUMENT Shop</h2>
    <hr style="width: 600px;">
    <br>
    <div class="add">
        <a href="tambah.php" class="waves-effect lime darken-4 btn" style="border-radius: 20px; color: #e6ee9c">Tambah Data</a>
        <a href="logout.php" class="waves-effect lime darken-4 btn" style="border-radius: 20px; color: #e6ee9c">Logout</a>
    </div>
    <br>
    <form action="" method="get" style="width: 400px; text-align: center; margin-left: 600px; margin-top: 20px;">
            <input type="text" name="keyword" autofocus placeholder="Cari disini!" color="grey" autocomplete="off" id="keyword">
            <button class="waves-effect lime darken-4 btn" type="submit" name="cari" id="tombol-cari" style="color: #e6ee9c; border-radius: 20px;">Cari</button>
    </form>
    <br>
    <div id="container">
    <table class="highlight" border="1" cellpadding="13" cellspacing="0" style="font-family: Lateef; font-size: 25px;">
        <tr class="lime lighten-2">
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Warna</th>
            <th>Stock</th>
            <th>Harga</th>
        </tr>
        <?php if(empty($alat)) : ?>
            <tr>
                <td colspan="4">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
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
<?php endif; ?>
    </table>
    </div>


</body>
</html>