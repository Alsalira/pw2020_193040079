<?php
    $pemain = [
      
            "Cristiano Ronaldo" => "Juventus",
            "Lionel Messi" => "Barcelona",    
            "Luca Modric" => "Real Madrid",        
            "Mohammad Salah" => "Liverpool",
            "Neymar Jr" => "Paris Saint Germain",
            "Sadio Mane" => "Liverpool",
            "Zlatan Ibrahimovic" => "Ac Milan",
        
        ];

?>

<html>
<head>
    <title>Latihan4c</title>
    <style>
         table{
             border: 1px solid black;
         }
    </style>
</head>
<body>
    <h4>Daftar Pemain Bola dan Clubnya</h4>
    <table>
    <?php  foreach ($pemain as $nama => $club) : ?>
            <tr>
                <td><?= "$nama"; ?></td>
                <td>:</td>
                <td><?= "$club" ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>