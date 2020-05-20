<html>
    <head>
    <title>Document</title>
        <style>
        .kotak {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border: 1px solid black;
            border-radius: 50%;
            margin: 4px;
            margin-top: 0px;
            background: salmon;
        }
        </style>
    </head>
    <body>
        <?php $huruf1 = "A"; ?>
        <div class="container">
        <div class="kotak"><?php echo $huruf1;?></div>
        </div>
        <?php $huruf2 = "B"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf2; ?></div>
        </div>
        <?php $huruf2 = "B"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf2; ?></div>
        </div>
        <br>
        <br>
        <?php $huruf3 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf3; ?></div>
        </div>
        <?php $huruf3 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf3; ?></div>
        </div>
        <?php $huruf3 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf3; ?></div>
        </div>

    </body>
</html>

