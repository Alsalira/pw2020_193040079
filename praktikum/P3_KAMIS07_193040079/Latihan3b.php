<?php
$jawabanIsset = "akan menentukan apakah suatu variabel telah didefinisikan dan variabel tersebut isinya bukan NULL. <br><br>";
$jawabanEmpty = "merupakan fungsi yang digunakan untuk mengecek data atau variabel yang kosong";

$GLOBALS ['Isset'] = $jawabanIsset;
$GLOBALS ['Empty'] = $jawabanEmpty;

function soal($style) {
   echo "<div class='container'>
        <p>Isset adalah = ".$GLOBALS['Isset']."</p>
        <p>Empty adalah = ".$GLOBALS['Empty']."</p>
    </div>";


}

?>

<html>
<head>
<title>Document</title>
    <style>
    .container {
        border: 1px solid black;
        padding: 3px;

    }

    </style>
</head>
<body>
    <p><?php echo soal($jawabanIsset) ?></p>

</body>
</html>

