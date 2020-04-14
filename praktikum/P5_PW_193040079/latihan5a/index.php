<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes_193040079") or die("Database salah!");

    $result = mysqli_query($conn, "SELECT * FROM alat_musik");

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alat Musik</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        img{
            height: 250px;
        }
    </style>
</head>
<body>
        <h2>DATA ALAT MUSIK</h2>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr>
                <td><b>NO.</b></td>
                <td><b>FOTO</b></td>
                <td><b>NAMA</b></td>
                <td><b>JENIS</b></td>
                <td><b>WARNA</b></td>
                <td><b>STOCK TERSEDIA</b></td>
                <td><b>HARGA (RP.)</b></td>
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><img src="assets/img/<?=$row["foto"]; ?>"></td>
                <td><?=$row["nama"]; ?></td>
                <td><?=$row["jenis"]; ?></td>
                <td><?=$row["warna"]; ?></td>
                <td><?=$row["stock"]; ?></td>
                <td><?=$row["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
    <?php endwhile; ?>
            </tr>
        </table>
</body>
</html>


