<?php
	session_start();
  if (!isset($_SESSION['zalogowany']))
  {
    header('Location:login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>SkateShop</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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

<div id="glowna">
  <form id="formularz" method="post" action="wysylka.php">
  <p class="dane_n">Dane do wysyłki</p>
    <input type="text" name="imie" id="imie" class="dane" placeholder="Twoje imię" minlength="3"required><br><br>
    <input type="text" name="nazwisko" id="nazwisko" class="dane" placeholder="Twoje nazwisko" minlength="3"required><br><br>
    <input type="text" name="miejscowosc" id="miejscowosc" class="dane"  placeholder="Miejscowość" minlength="3"required><br><br>
    <input type="text" name="ulica" id="ulica" class="dane"  placeholder="Ulica" minlength="3"required><br><br>
    <input type="number" name="kod_pocztowy" id="kod_pocztowy" class="dane"  placeholder="Kod-pocztowy" minlength="5"required><br><br>
    <input type="number" name="" disabled placeholder="+48" id="numer" class="dane">
    <input type="number" name="telefon" id="telefon" class="dane" placeholder="Numer telefonu" minlength="9"required><br><br>
    
    
    <h2>Płeć:</h2>
    <label><input type="radio" name="plec" value="Kobieta" checked style="width: 10px;font-size: 50px;"><span style="font-size: 25px;padding-right:20px;">Kobieta</span></label>
    <label><input type="radio" name="plec" value="Mężczyzna" style="width: 10px;font-size: 50px;"><span style="font-size: 25px;">Mężczyzna</span></label><br><br><br>  
    
    
    <label><p class="dane_n">Wybierz sposób dostawy:</p>
      <select name="dostawa">
        <optgroup label="Płatność on-line">
          <option>InPost Paczkomaty 24/7</option> 
          <option>Kurier standard</option>
        </optgroup>
        <optgroup label="Płatność przy odbiorze">
          <option>Kurier za pobraniem</option> 
          <option>Odbiór w sklepie</option> 
        </optgroup>
      </select>
    </label>
      <br><br><br>
      <textarea name="#" style="font-size: 20px;" rows="5" cols="80" placeholder="Uwagi dotyczące zamówienia"></textarea><br><br>
      <a href="wszystkie.php"><input type="button" value="Wróć do zakupów"></a>
      <a href="podsumowanie.php"><input type="submit" value="Dalej"></a>
  </form>
</div>

<div id="Pbok">   </div>
  
<div id="stopka" style="position: absolute; top: 1300px;">
<div id="kontakt">
  <p class="social">
    <b>Informacje</b><br> <br>
    <a href="kontakt.php">Kontakt</a>
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