<?php
	session_start();
  if (!isset($_SESSION['admin']))
  {
    header('Location:index.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>SkateShop</title>
    <link rel="stylesheet" href="style.css">
    <script src="skrypt.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
</head>
<body>
  
<div id="logowanie">
<span style="float: left; position: relative;left:100px">
<img src="img/user.png" alt="konto" id="ikonaU">

        <?php
        if (isset($_SESSION['admin'])){
          echo '<a href="wyloguj.php">';
          echo " Witaj ".$_SESSION['$imie']."";
        }
        ?>
 </span>
    
    </div>
    <div id="logo"> <a href="index_admin.php"><img src="img/logo.jpg" alt="logo"></div></a>
    
    <div class="navbar">
     <a href="index_admin.php">Home</a>
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

  <div id="Lbok">   </div>
  
  <div id="glowna"><br><br><br><br>
    <form action="zmiana.php" method="POST">
        <input placeholder="Stary Login" type="text" name="s_login"><br><br>
        <input placeholder="Nowy Login" type="text" name="n_login"><br><br>
        <input placeholder="Stare Hasło" type="password" name="s_haslo"><br><br>
        <input placeholder="Nowe Hasło" type="password" name="n_haslo"><br><br>
        <a href="admin.php"><input id="zatwierdz" type="button" value="Wróć" style="cursor: pointer; position: relative; right: 0px;"></a>
        <input id="zatwierdz" type="submit" value="Zmień" style="cursor: pointer; position: relative; right: 50px;">
    </form>
  </div>
  
  <div id="Pbok">   </div>
   
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