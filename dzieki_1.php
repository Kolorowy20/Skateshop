<?php 
	$polaczenie = mysqli_connect("localhost", "root", "" ,"projekt_konrad");
	//@$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	$query1 = "TRUNCATE table koszyk;";
	//$query2 = "TRUNCATE table wysylka;";
	
	$koszyk = mysqli_query($polaczenie, $query1);
	//$wysylka = mysqli_query($polaczenie, $query2);
	header("location: dzieki.php");
	mysqli_close($polaczenie);
?>

