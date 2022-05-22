<?php 
	$polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
	//$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	$model = $_POST['model'];
	$cena = $_POST['cena'];
	$ile = $_POST['ile'];
	$rodzaj = $_POST['rodzaj'];
	$id = $_POST['id_deski'];
		$query = "INSERT INTO koszyk (id_deski,rodzaj,model,ilosc,cena) values ('$id', '$rodzaj', '$model', '$ile', '$cena');";
		$wynik = mysqli_query($polaczenie, $query);
		header('Location:koszyk.php');
	mysqli_close($polaczenie);
?>