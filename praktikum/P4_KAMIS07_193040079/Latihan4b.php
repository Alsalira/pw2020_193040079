<?php 
    $pemainbolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"]
?>
<html>
<head>
<title>Latihan4b</title>
</head>
<body>
    <h4>Daftar Pemain Bola Terkenal</h4>
    <ol>
        <?php
            foreach ($pemainbolaterkenal as $nama) :
        ?>
        <li><?= $nama ?></li>
            <?php endforeach; ?>
    </ol>
    <br>

    <?php
    $pemainbolaterkenal[]="Luca Modric";
    $pemainbolaterkenal[]="Sadio Mane";
    sort($pemainbolaterkenal)
    ?>

    <h4>Daftar Pemain Bola Terkenal Baru</h4>
    <ol>
        <?php
            foreach ($pemainbolaterkenal as $nama) :
        ?>
        <li><?= $nama ?></li>
            <?php endforeach;?>
    </ol>
</body>
</html>