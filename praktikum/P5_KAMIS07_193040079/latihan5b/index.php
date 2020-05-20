<?php
    require 'php/function.php';

    $alat = query("SELECT * FROM alat_musik")
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <h2>INSTRUMENT Shop</h2>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr class="brown lighten-2">
                <td><b>NO.</b></td>
                <td><b>FOTO</b></td>
                <td><b>NAMA</b></td>
                <td><b>JENIS</b></td>
                <td><b>WARNA</b></td>
                <td><b>STOCK TERSEDIA</b></td>
                <td><b>HARGA (RP.)</b></td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($alat as $musik) : ?>
            <tr class="brown lighten-5">
                <td><?= $i ?> </td>
                <td><img src="assets/img/<?=$musik["foto"]; ?>"></td>
                <td><?=$musik["nama"]; ?></td>
                <td><?=$musik["jenis"]; ?></td>
                <td><?=$musik["warna"]; ?></td>
                <td><?=$musik["stock"]; ?></td>
                <td><?=$musik["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
    <?php endforeach; ?>
            </tr>
        </table>

        <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>


