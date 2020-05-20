
<html>
<head>
    <title>Funtion1</title>
        <style>
            .tulisan{
                font-size: 28px;
                font-family: arial;
                color: #8c782d;
                font-style: italic;
                font-weight: bolder;
                padding-left: 20px;
            }
            .bungkus{
                box-shadow: 2px 2px 5px 5px;
                border: 1px solid black;
                width: 600px;
                border-radius: 5px;
                height: 100px;
            }
        </style>
</head>
<body>
       
        <?php
        
        function gantiStyle($tulisan, $style1, $style2) {
            echo "<div class = '$style1'>
            <p class = '$style2' > $tulisan </p>
            </div>";
        }   
    ?>

    <?php
        echo gantiStyle("Selamat Datang di Praktikum PW 2020", "bungkus", "tulisan");
    ?>    

</body>
</html>