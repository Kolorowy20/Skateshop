<?php
	session_start();
  if (isset($_SESSION['zalogowany']))
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
<span style="float: left; padding-right: 30px;">
<img src="img/user.png" alt="konto" id="ikonaU">
        <?php
        if (isset($_SESSION['zalogowany'])){
          echo '<a href="wyloguj.php">';
          echo " Witaj ".$_SESSION['$imie']."";
        }
        else
        {
          echo '<a href="login.php"> Moje konto</a>';
        }
        ?>
 </span>
      <div><a href="koszyk.php">
        <img src="img/wozek2.png" alt="koszyk" id="ikonaW"> Koszyk</a></div>
    </div>
    <div id="logo"> <a href="index.php"><img src="img/logo.jpg" alt="logo"></div></a>
    
    <div class="navbar">
     <a href="index.php">Home</a>
        <a href="film.php">Video</a>
    <div class="dropdown">
    <button class="dropbtn"><b>Sklep</b><img src="img/strzalka.png" style="width: 11px; margin-left: 10px;">
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
  
  <div id="glowna">
  <?php 
      $polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
      //$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
			$deski = mysqli_query($polaczenie, "select * from deski where rodzaj='waveboeard'");

      while ($record = $deski -> fetch_assoc()) {
        $id = $record['id_deski'];
        $rodzaj = $record['rodzaj'];
        $model = $record['model'];
        $cena = $record['cena'];
        $opis = $record['opis'];
      
        if ($id == 10)
        echo"
    <div class='produkty'>
      <a href='waveboeardy_1.php'>
      <img src='deski/Waveboard_v1_1.png' alt='deska' style='height: 400px;'>
      <p class='nazwa'>$model</p>
      <p class='nazwa'>$cena zł</p>
      </a>
    </div>";

    else if ($id == 11)
    echo"
    <div class='produkty'>
      <a href='waveboeardy_2.php'>
      <img src='deski/Waveboard_v2_1.png' alt='deska' style='height: 400px;'>
      <p class='nazwa'>$model</p>
      <p class='nazwa'>$cena zł</p>
      </a>
    </div>";

    else if ($id == 12)
    echo"
    <div class='produkty'>
      <a href='waveboeardy_3.php'>
      <img src='deski/Waveboard_v3_1.png' alt='deska' style='height: 400px'>
      <p class='nazwa'>$model</p>
      <p class='nazwa'>$cena zł</p>
      </a>
    </div>
</div>";
}
mysqli_close($polaczenie);
?>
<div id="Pbok">   </div>
 
<div id="stopka" style="position: absolute; top: 900px;">
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