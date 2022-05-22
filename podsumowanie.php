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
  <p class="dane_n">Koszyk</p>
  <?php 
    $polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
    //$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");

        if (mysqli_connect_errno())
        {
            echo "Błąd połączenia z serwerem ! Spróbuj później !";
        }

    $koszyk = mysqli_query($polaczenie, "select * from koszyk");

echo "<table style='font-size:20px;position: relative;left: 80px; width: 1000px;'>
    <tr style='font-weight:bold;'>
        <td> Rodzaj </td>
        <td> Model </td>
        <td> Ilosc </td>
        <td> Cena </td>
    </tr>";

    $suma = 0;
    while ($rekord = $koszyk -> fetch_assoc()) {
        $id = $rekord['id_deski'];
        $rodzaj = $rekord['rodzaj'];
        $model = $rekord['model'];
        $ilosc =$rekord['ilosc'];
        $cena = $rekord['cena'];

    echo "<tr>
    <td> $rodzaj </td>
    <td> $model </td>
    <td> $ilosc </td>
    <td> $cena zł</td>
    </tr>";

    $suma = $suma + ($ilosc * $cena);
    }
echo "<tr>
    <td colspan='3'></td>
    <th style='background-color: #5DF531;'> SUMA: $suma zł </td></th>";
echo "</table>";


$wysylka = mysqli_query($polaczenie, "select * from wysylka");

while ($rekord = $wysylka -> fetch_assoc()) {
$imie = $rekord['imie'];
$nazwisko = $rekord['nazwisko'];
$miejscowosc = $rekord['miejscowosc'];
$ulica = $rekord['ulica'];
$kod = $rekord['kod_pocztowy']; 
$telefon = $rekord['telefon']; 
$dostawa = $rekord['dostawa'];
//$data_utworzenia = $rekord['data_utworzenia'];
$plec = $rekord['plec'];

}


echo "<br><br><br>";
echo "<table style='font-size:20px;position: relative;left: 80px; width: 1000px;'>
<p class='dane_n'> DANE DO WYSYŁKI</p>
<tr>
    <th> Imię </th>
    <td> $imie </td>
</tr>
<tr>
    <th> Nazwisko </th>
    <td> $nazwisko </td>
</tr>
<tr>
    <th> Miejscowość </th>
    <td> $miejscowosc </td>
</tr>
<tr>
    <th> Ulica </th>
    <td> $ulica </td>
</tr>
<tr>
    <th> Kod pocztowy </th>
    <td> $kod </td>
</tr>
<tr>
    <th> Nr telefonu </th>
    <td> $telefon </td>
</tr>
    <th> Nr telefonu </th>
    <td> $dostawa </td>
</tr>
</tr>
    <th> Płeć </th>
    <td> $plec </td>
</tr>
</tr>
</table>";
$klienci = mysqli_query($polaczenie, "select * from klienci");

while ($rekord = $klienci -> fetch_assoc()) {
  $klienta  = $rekord['id_klienta'];
}
      $dzisiaj = date("Y-m-d H:i:s"); 
			$query = "INSERT INTO zamowienia (imie,id_klienta,id_deski,dostawa,cena,data_utworzenia) value ('$imie','$klienta', '$id','$dostawa','$suma',' $dzisiaj');";
      $wynik = mysqli_query($polaczenie, $query);
mysqli_close($polaczenie); 
?>      <br><br>
      <form method="post" action="dzieki_1.php">
        <a href="index.php"><input type="button" value="Wróć"></a>
        <a href="dzieki.php"><input type="submit" value="Podsumowanie"></a>
      </form>
  </div>
  
  <div id="Pbok">   </div>
   
  <div id="stopka" style="position: absolute; top: 1050px;">
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