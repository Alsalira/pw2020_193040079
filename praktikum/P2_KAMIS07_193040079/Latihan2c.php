<html>
<head>
 <title>Latihan2c</title>
    <style>
        
        .lingkaran {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            line-height: 50px;
            background-color: salmon;
            text-align: center;
            border: 2px solid black;
            display: inline-block;
            margin: 5px;

        }
    </style>
</head>
<body>
        <?php for ($a = 1; $a <= 3; $a++) :?>
            <?php for ($b = 1; $b <=$a; $b++) : ?>
                <div class = "lingkaran">
                <?= $a ?>
                </div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>


</body>
</html>