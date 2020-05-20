<?php
require 'function.php';

    if (isset($_POST["register"])) {
        if (registrasi($_POST) > 0) {
            echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.php';
                 </script>";
        } else {
            echo "<script>
                    alert('Registrasi Gagal');
                    document.location.href = 'login.php';
                 </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="../css/registrasi.css">
    <title>Registrasi</title>
</head>
<body style="background-image: url(../assets/img/background/gambar4.jpg);">
    <form action="" method="post" style="width: 400px; text-align: center; margin-left: 590px;">
            <div class="card-panel" style="border-radius: 20px; opacity: 0.8;">
                <div class="input-field">
                    <label for="username">Username :</label><br>
                    <input type="text" name="username" id="username" class="validate" autocomplete="off" required>
                </div>
                <div class="input-field">
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password" class="validate" required>
                </div>
                <br>
                <button type="submit" name="register" class="waves-effect blue darken-2 btn" style="border-radius: 30px;">Register</button>
                <button type="submit" class="waves-effect blue darken-2 btn" style="border-radius: 30px;">
                    <a href="login.php" style="text-decoration: none; color: white;">Kembali</a>
                </button>
            </div>
    </form>
</body>
</html>