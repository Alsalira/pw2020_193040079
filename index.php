<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Index</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=Fauna+One&family=Forum&family=Fredericka+the+Great&family=Nanum+Pen+Script&family=Satisfy&display=swap" rel="stylesheet">
  
  <!-- My Css -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body id="home" class="scrollspy">

<div class="navbar-fixed">
  <nav class="light-green lighten-4" role="navigation">
    <div class="nav-wrapper container" style="font-family: fauna one;">
      <a id="logo-container" href="#home" class="brand-logo">Alsa Lira Amalia</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#praktikum">Praktikum</a></li>
        <li><a href="#tugas">Tugas Besar</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#praktikum">Praktikum</a></li>
        <li><a href="#tugas">Tugas Besar</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center light green-text text-lighten-2" style="font-family: fredericka the great;">Welcome to my Index</h1>
          <div class="row center" style="font-family: forum;">
            <h5 class="header col s12 light">Alsa Lira Amalia</h5>
            <h5 class="header col s12 light">193040079</h5>
            <br><br><br>
            <h5 class="header col s12 light" style="font-size: 20px;">Username: alsa  Password: alsa</h5>
          </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img1.jpg" alt="Unsplashed background img 1"></div>
  </div>

<section id="praktikum" class=" praktikum scrollspy">
  <div class="container">
    <div class="section">
      <div class="row" style="font-family: forum;">
        <h3 class="center light grey-text text-darken-3">Praktikum</h3>
        <a  href="https://github.com/Alsalira/pw2020_193040079/tree/master/praktikum"class="waves-effect waves-light-center btn">Repository</a>
            <div class="collection" style="text-align: center;">
                <a href="Praktikum/p1_kamis07_193040079" class="collection-item">P1_KAMIS07_193040079</a>
                <a href="Praktikum/p2_kamis07_193040079" class="collection-item">P2_KAMIS07_193040079</a>
                <a href="Praktikum/p3_kamis07_193040079" class="collection-item">P3_KAMIS07_193040079</a>
                <a href="Praktikum/p4_kamis07_193040079" class="collection-item">P4_KAMIS07_193040079</a>
                <a href="Praktikum/p5_kamis07_193040079" class="collection-item">P5_KAMIS07_193040079</a>
                <a href="Praktikum/p6_kamis07_193040079" class="collection-item">P6_KAMIS07_193040079</a>
                <a href="Praktikum/p7_kamis07_193040079" class="collection-item">P7_KAMIS07_193040079</a>
            </div>
      </div>
    </div>
  </div>
</section>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
            <div class="card-panel grey lighten-5 z-depth-1" style="width: 800px; margin-left: 200px; border-radius: 50px; opacity: 0.9;">
            <div class="row valign-wrapper">
                <div class="col s2">
                <img src="alsa.jpg" alt="" class="circle responsive-img"> 
                </div>
                <div class="col s10">
                <span class="black-text">
                <p style="font-size: 25px; font-family: nanum pen script;">Hello i'm Alsa,
                <br>I'm student of informatics engineering Pasundan Univeristy</p>
                </span>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <section id="tugas" class="tugas scrollspy">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center" style="font-family: forum;">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Tugas Besar</h4>
          <p class="center-align light"><b>Username:</b> alsa <b>Password:</b> alsa</p>
          <a href="https://github.com/Alsalira/pw2020_193040079/tree/master/tubes" class="waves-effect waves-light btn">Repository</a>
          <div class="collection" style="text-align: center;">
                <a href="tubes/index.php" class="collection-item">TUGAS BESAR</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <footer class="page-footer light-green lighten-4">
      <div class="container" style="text-align: center; color: #827717; margin-top: -10px;">
      Alsalira. Copyright 2020
      </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
    scrollOffset: 50
       });
  </script>

  </body>
</html>