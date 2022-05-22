<?php 
	$polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
	//$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $miejscowosc = $_POST['miejscowosc'];
    $ulica = $_POST['ulica'];
    $kod_pocztowy = $_POST['kod_pocztowy'];
    $telefon = $_POST['telefon'];
    $dostawa = $_POST['dostawa'];
    $plec = $_POST['plec'];
		$query = "INSERT INTO wysylka (imie,nazwisko,miejscowosc,ulica,kod_pocztowy,telefon,dostawa,plec) values ('$imie', '$nazwisko', '$miejscowosc', '$ulica', '$kod_pocztowy', '$telefon', '$dostawa','$plec');";
		$wynik = mysqli_query($polaczenie, $query);
        header("location: podsumowanie.php");
	mysqli_close($polaczenie);
?>