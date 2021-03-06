<?php 
session_start();
require 'function.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    // mecocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.hp");
        die;
    }
    $error = true;
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
       <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/admin.css">
       <link rel="stylesheet" type="text/css" href="../css/login.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align: center; margin-top: 50px; ">Username atau Password salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <div class="card-panel">
            <div class="input-field">
                <label for="username">Username :</label><br>
                <input type="text" name="username" id="username" class="validate" autocomplete="off" required>
            </div>
            <div class="input-field">
                <label for="password">Password :</label><br>
                <input type="password" name="password" id="password" class="validate" required>
            </div>
        <div class="remember">
            <label>
            <input type="checkbox" name="remember" class="filled-in">
            <span>Remember me</span>
            </label>
        </div>
        <br>
        <button type="submit" name="submit" class="waves-effect green darken-4 btn">Login</button>
        </div>
    </form>
</body>
</html>
