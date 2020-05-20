<?php
    require 'php/function.php';

    if(isset($_GET['cari'])) {
      $keyword = $_GET['keyword'];
      $alat = query("SELECT * FROM alat_musik WHERE
          nama LIKE '%$keyword%'OR
          jenis LIKE '%$keyword%'OR
          warna LIKE '%$keyword%'OR
          stock LIKE '%$keyword%'OR
          harga LIKE '%$keyword%'
      ");
  } else {
      $alat = query("SELECT * FROM alat_musik");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Condiment&family=Lateef&family=Lovers+Quarrel&family=Rock+Salt&family=Sacramento&display=swap" rel="stylesheet">
     
      <!-- my CSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

       
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Instrument Shop</title>
   </head>

<body id="home" class="scrollspy">  
<!--- navbar ---> 
<div class="navbar-fixed"> 
    <nav class="lime lighten-5">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo" style="color: #e6ee9c; font-family: Cinzel;">INSTRUMENT SHOP</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger" style="color: #dce775"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about" style="color: #33691e;">About</a></li>
            <li><a href="#catalog" style="color: #33691e;">Catalog</a></li>
            <li><a href="php/login.php"class="waves-effect lime lighten-2 btn" style="color: #33691e;">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
</div>
  

   <!-- sidenav -->
   <ul class="sidenav waves-effect lime lighten-4 btn" id="mobile-nav">
      <li><a href="">About</a></li>
      <li><a href="">Catalog</a></li>
      <li><a href="php/login.php"class="waves-effect lime lighten-2 btn" style="color: #33691e;">Admin</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
      <ul class="slides" style="font-family: Rock Salt;">
        <li>
          <img src="assets/img/slider/slider8.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h2>Welcome to our website.<br>And find what you need!</h2>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/slider9.jpg"> <!-- random image -->
          <div class="caption right-align">
          <h2>Explore your talent!</h2>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/slider10.jpg"> <!-- random image -->
          <div class="caption top-align">
          <h2>Develop your talent right now!</h2>  
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light" style=" color: #9e9d24;">About Us</h3>
        <div class="col m12 light">
          <h5 style="text-align: center; font-family: Sacramento; font-size: 30px; font-weight: bold; margin-top: 50px;">We Are Profesionals</h5>
          <p style="text-align: center; font-family: Lateef; font-size: 20px; color: #424242;">Hello, welcome our website. Our musical instrument shop is the best online musical instrument shop. You can develop your musical instrument capabilities and you can get original musical instruments of the highest quality that you can get from our online store.</p>
          <br>
          <p style="font-family: Lovers Quarrel; font-size: 70px; text-align: center; margin-bottom: -50px; margin-top: 10px; color: #d4e157;">Develop your talent right now!</p>
        </div>
        <hr style="color: #827717;">
      </div>
    </div>     
  </section>

     <!-- catalog -->
     <section id="catalog" class="catalog scrollspy" style="background-image: url(../assets/img/foto10.jpg);">
     
      <div class="container">
      <hr style="color: #827717;">
        <h3 class="light center" style="color: #9e9d24;">Catalog</h3>
          <form action="" method="get" style="width: 400px; text-align: center; margin-left: 360px;">
              <input type="text" name="keyword" autofocus placeholder="Cari Disini!" color="grey" autocomplete="off" id="keyword">
              <button class="waves-effect lime lighten-2 btn" type="submit" name="cari" id="tombol-cari" style="color: #33691e;">Cari</button>
          </form>
        <div id="container">
        <div class="row center"> 
        <?php if(empty($alat)) : ?>
                      <h1>Data tidak ditemukan</h1>
          <?php else : ?>
          <?php foreach ($alat as $musik) : ?>
          <div class="col m4 s12">
          <div class="card" style="border-radius: 10px; width: 350px;">
          <div class="card-image waves-effect waves-block waves-light">
            <p class="foto">
                <a href="php/detail.php?id=<?= $musik['id'] ?>">
                    <img src="assets/img/<?= $musik["foto"] ?>" class="responsive-img materialboxed" width=500>
                </a>
            </p>
            <p class="nama">
                <a href="php/detail.php?id=<?= $musik['id'] ?>">
                    <?= $musik["nama"] ?>
                </a>
            </p>
            </div>
            </div>
          </div>
    <?php endforeach; ?> 
    <?php endif; ?>
        </div>
      </div>
    </section>


    <!-- footer -->
    <footer class="grey lighten-5" style="color: #dce775; text-align: center;">
      <p class="flow-text">AlsaLira. Copyright 2020.</p>
    </footer>


 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script>
    const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: true,
        height: 700,
        transition: 10000,
        interval: 3000
        });

    const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
        scrollOffset: 50
       });

       
 </script>

</body>
</html>


