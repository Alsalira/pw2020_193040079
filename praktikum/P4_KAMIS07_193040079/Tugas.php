<?php
    $alat = [
        [
            "foto" => "GitarAkustikElektrikAD810E(1).jpg",
            "nama" => "CORT GA5F BW-NS ELECTRIC ACOUSTIC GUITAR",
            "jenis" => "Acoustic Electric Guitar",
            "warna" => "caramel",
            "stock" => 45,
            "harga" => 4000000
        ],
        [
            "foto" => "jade1.jpg",
            "nama" => "CORT JADE1-AW ACOUSTIC GUITAR",
            "jenis" => "Acoustic Guitar",
            "warna" => "white",
            "stock" => 35,
            "harga" => 1800000
        ],
        [
            "foto" => "martinlxk2.jpg",
            "nama" => "MARTIN LXK2 Acoustic Guitar",
            "jenis" => "Acoustic Guitar",
            "warna" => "wood",
            "stock" => 40,
            "harga" => 7000000
        ],
        [
            "foto" => "sfx.jpg",
            "nama" => "CORT SFX ME BKS ACOUSTIC GUITAR",
            "jenis" => "Acoustic Guitar",
            "warna" => "black",
            "stock" => 45,
            "harga" => 2400000
        ],
        [
            "foto" => "CORTAC100OP(1).jpg",
            "nama" => "CORT AC100 OP CLASSIC GUITAR",
            "jenis" => "Classic Guitar",
            "warna" => "caramel",
            "stock" => 35,
            "harga" => 1400000
        ],
        [
            "foto" => "CORTActionBassVPlus.png",
            "nama" => "CORT ACTION BASS V PLUS-TR ELECTRIC BASS",
            "jenis" => "Electric Bass",
            "warna" => "black",
            "stock" => 45,
            "harga" => 2500000
        ],
        [
            "foto" => "CORTActionB5PlusASOPN.jpg",
            "nama" => "CORT ARTISAN B5 PLUS AS OPN ELECTRIC BASS",
            "jenis" => "Electric Bass",
            "warna" => "light wood",
            "stock" => 40,
            "harga" => 6000000
        ],
        [
            "foto" => "Evansb08g2coated.jpg",
            "nama" => "EVANS B08G2 COATED WHITE HEAD",
            "jenis" => "Acoustic Drums",
            "warna" => "black-white",
            "stock" => 30,
            "harga" => 108000
        ],
        [
            "foto" => "Evanstricenterbongo.jpg",
            "nama" => "EVANS EB0709 TRI-CENTER BONGO HEAD",
            "jenis" => "Percussion",
            "warna" => "white-gold",
            "stock" => 30,
            "harga" => 720000
        ],
        [
            "foto" => "YamahaDigitalPianoYDP143(1).jpg",
            "nama" => "YAMAHA DIGITAL PIANO YDP-103R",
            "jenis" => "Digital Pianos",
            "warna" => "black",
            "stock" => 20,
            "harga" => 9200000
        ]
        ];
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
            <?php foreach ($alat as $musik) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><img src="assets/img/<?=$musik["foto"]; ?>"></td>
                <td><?=$musik["nama"]; ?></td>
                <td><?=$musik["jenis"]; ?></td>
                <td><?=$musik["warna"]; ?></td>
                <td><?=$musik["stock"]; ?></td>
                <td><?=$musik["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
</body>
</html>


