<?php
function hitungDeterminan($satu,$dua,$tiga,$empat){

    //baris code perhitungan determinan

    //menampilkan matriks
    echo "<table style='border-left: 2px solid black; border-right: 2px solid black;'cellspacing='5' cellpadding='5'>
            <tr>
                <td>$satu</td>
                <td>$dua</td>
            </tr>
            <tr>
                <td>$tiga</td>
                <td>$empat</td>
            </tr>
        </table>";
        $determinan = (($satu * $empat) - ($dua * $tiga));
    echo "<p style= padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>"; // menampilkan Teks dibawah matriks
}
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4) ?> <!-- Memanggil function hitungDeterminant -->
</body>
</html>