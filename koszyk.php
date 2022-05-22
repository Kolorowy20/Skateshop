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
				
				if (mysqli_connect_errno()) {
					echo "Błąd połączenia z serwerem ! Spróbuj później !";
				}
				
				if (isset($_GET['co']) && isset($_GET['id_koszyk']) && $_GET['co'] == 'usun') {
					$wynik = mysqli_query($polaczenie, "delete from koszyk where id = '" . $_GET['id_koszyk'] . "'");
				}
				$koszyk_wys = mysqli_query($polaczenie, "select * from koszyk");
				
				echo "<table style='width: 950px;position: relative; left:90px; font-size: 20px;'>
						<tr>
              <th> Rodzaj </th> <th> Model </th> <th> Ilość </th> <th> Cena </th> <th> Skateshop© </th>
						</tr>";
				
				$suma = 0;
				while ($rekord = $koszyk_wys -> fetch_assoc()) {
					$id_koszyk = $rekord['id'];
					$id = $rekord['id_deski'];
					$rodzaj = $rekord['rodzaj'];
					$model = $rekord['model'];
          $ilosc = $rekord['ilosc'];
					$cena = $rekord['cena'];

          //$opis = $rekord['opis'];
					// <th> <input type='number' min='0' class='ile_tego' value='$ilosc'></th> mialo dzialac ale nie dziala
					echo "<tr>
							<td> $rodzaj </td>
							<td> $model </td>
              <td> $ilosc </td>
							<td> $cena zł </td>
							<td style='background-color:red ;'> <a href='koszyk.php?co=usun&amp;id_koszyk=$id_koszyk'>Wyczyść</a> </td>
						</tr>";
						
					$suma = $suma + ($ilosc * $cena);
				}
				echo "<tr>
						<td colspan='4'></td>
						<th style='background-color: #5DF531;'> Koszt: $suma zł </td>
					</th>";
				echo "</table>";

				echo "<div style='clear: both'></div>";
				
				mysqli_close($polaczenie); 
			?> <br>
      <form method="post" action="dane.php">
        <a href="wszystkie.php"><input type="button" value="Wróć do zakupów"></a>
        <a href="dane.php"><input type="submit" value="Podsumowanie"></a>
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