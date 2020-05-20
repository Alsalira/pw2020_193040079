<?php 
session_start();
require 'function.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: admin.php");
        exit;
    }
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    // mecocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24); 
            }
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
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
       
       <link rel="stylesheet" type="text/css" href="../css/login.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
</head>
<body>
    <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align: center; margin-top: 50px; font-family: Lateef; font-size: 25px; ">Username atau Password salah!</p>
    <?php endif; ?>
    <form action="" method="post" style="width: 350px; text-align: center; margin-left: 590px;">
        <div class="card-panel" style="border-radius: 20px; opacity: 0.9;">
            <div>
                <p style="font-size: 40px; color: #e6ee9c">LOGIN</p>
            </div>
            <div class="input-field" style="margin-top: 50px;">
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
        <button type="submit" name="submit" class="waves-effect blue darken-2 btn" style="border-radius: 30px; margin-bottom: 50px;">Login</button>
        <p>Belum punya akun? Registrasi<a href="registrasi.php"> disini</a></p>
        </div>
        
    </form>
    
</body>
</html>
