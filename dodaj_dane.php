<?php 
	$polaczenie = mysqli_connect ("localhost", "root", "", "projekt_konrad");
    //$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	if (isset($_POST['co']) && $_POST['co'] == 'dodaj') {
		$query = "insert into koszyk (rodzaj, model, cena) values ('" . $_POST['rodzaj'] . "', '" . $_POST['model'] ."', '" . $_POST['cena'] . "');";
		$wynik = mysqli_query($polaczenie, $query);
		header("location:javascript://history.go(-1)");
	}
	mysqli_close();
?>