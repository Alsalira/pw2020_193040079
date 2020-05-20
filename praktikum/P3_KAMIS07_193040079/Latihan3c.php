<?php
    function tumpukanBola($tumpukan) {
        for ($a = 0; $a <= $tumpukan; $a++) {
        for ($b = 1; $b <= $a;$b++){
            echo "<div class= 'bola'>$a</div>";
        }
            echo "<div class= 'clear'></div>";
    }
}

?>
<html>
<head>
<title></title>
    <style>
.bola   {   border-radius: 50%;
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

    <?php tumpukanBola(5) ?>

</body>
</html>