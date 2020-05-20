<?php
    require 'php/function.php';

    $alat = query("SELECT * FROM alat_musik")
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alat Musik</title>
   </head>
<body id="home" class="scrollspy">  
<!--- navbar --->
    
<div class="navbar-fixed">
    <nav class="grey darken-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">INSTRUMENT SHOP</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#catalog">Catalog</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

   <!-- sidenav -->
   <ul class="sidenav" id="mobile-nav">
      <li><a href="">Catalog</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
      <ul class="slides">
        <li>
          <img src="assets/img/slider/slider4.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h2>Welcome to our website.<br>And find what you need!</h2>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/slider2.jpg"> <!-- random image -->
          <div class="caption right-align">
          <h2>Explore your world!</h2>
          </div>
        </li>
        <li>
          <img src="assets/img/slider/slider3.jpg"> <!-- random image -->
          <div class="caption right-align">
          </div>
        </li>
      </ul>
    </div>

     <!-- catalog -->
     <section id="catalog" class="catalog scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Catalog</h3>
        <div class="row center"> 
          <?php foreach ($alat as $musik) : ?>
          <div class="col m4 s12">
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
    <?php endforeach; ?> 
        </div>
      </div>
    </section>

    
    <!-- footer -->
    <footer class="grey darken-1 white-text center">
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
        height: 500,
        transition: 600,
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


