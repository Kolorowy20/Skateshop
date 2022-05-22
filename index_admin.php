<?php
	session_start();
  if (!isset($_SESSION['admin']))
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>SkateShop</title>
    <link rel="stylesheet" href="style.css">
    <script src="skrypt.js"></script>
    <link rel="icon" type="image/x-icon" href="img/mini.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>
<body onload="zmienslajd()">
  
<div id="logowanie">
<span style="float: left; position: relative;left:20px">
<img src="img/user.png" alt="konto" id="ikonaU">
        <?php
        if (isset($_SESSION['admin'])){
          echo '<a href="wyloguj.php">';
          echo " Witaj ".$_SESSION['$imie']."";
        }
        else
        {
          echo '<a href="login.php"> Moje konto</a>';
        }
        ?>
 </span>
      <div><a href="admin.php">
        <span style="position: relative;left:40px"><img src="img/zebatka.png" alt="koszyk" style="width:16px;display: inline-block;"> Panel</a></div></span>
    </div>
    <div id="logo"> <a href="index.php"><img src="img/logo.jpg" alt="logo"></div></a>
    
    
    <div class="navbar">
     <a href="index.php"><b>Home</b></a>
        <a href="film.php">Video</a>
    <div class="dropdown">
    <button class="dropbtn">Sklep<img src="img/strzalka.png" style="width: 11px; margin-left: 10px;">
    </button>
<div class="lista_rozwijana">
    <a href="cruiser.php">Cruiser</a>
    <a href="deski.php">Kompletna</a>
    <a href="longboard.php">Longboard</a>
    <a href="pennyboeard.php">Pennyboard</a>
    <a href="waveboeardy.php">Waveboardy</a>
    <a href="wszystkie.php">Wszystkie deski</a>
    </div>
  </div>
</div>
  <div id="Lbok" style="height: 580px;">  </div>
  
  <div id="glowna" style="height: 580px;">
    <img src="img/zdjecie1.png" id="zdjecia" alt="skate">

      
      <img src="img/PrawaS.png" alt="nastepne" id="strzalkaP" onclick="nastepny()">
      <img src="img/LewaS.png" alt="poprzednie" id="strzalkaL" onclick="poprzedni()">

  </div>
  
  <div id="Pbok" style="height: 580px;">   </div>
   
  <div id="stopka">
  <div id="kontakt">
    <p class="social">
      <b>Informacje</b><br> <br>
      <a href="kontakt.php"><span style="font-weight: normal;">Kontakt</span></a>
    </p>
    <p class="social">
      <b>Social media</b><br><br>
      <a href="https://www.facebook.com/" target="blink"><img src="img/fb.png" alt="fb" style="width: 24px;"></a>
      <a href="https://www.youtube.com/" target="blink"><img src="img/yt.png" alt="yt" style="width: 25px;"></a>
      <a href="https://www.twitter.com/" target="blink"><img src="img/twitter.png" alt="twitter" style="width: 25px;"></a>
      <a href="https://www.instagram.com/" target="blink"><img src="img/instagram.png" alt="instagram" style="width: 24px;"></a>
    </p>
  </div>
  <footer>Wszystkie prawa zastrzeżone © 2021, Konrad Białas.</footer>
  </div>
</body>
</html>