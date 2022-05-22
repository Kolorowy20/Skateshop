<?php 
	$polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
	//@$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	if (mysqli_connect_errno()) {
		echo "Błąd połączenia z serwerem! Spróbuj później!";
	}
	
	//$query = "select c.rodzaj, c.model, k.id_klienta, k.imie, z.id_zamowienia, z.id_deski, w.dostawa from deski c, klienci k, zamowienia z, wysylka w; ";
	//$query = "select id_zamowienia, imie, id_klienta, id_deski, dostawa,cena, data_utworzenia from zamowienia;";

	$query = "select * from zamowienia inner join wysylka on zamowienia.imie = wysylka.imie;";

	$pokaz = mysqli_query($polaczenie, $query);


	
	echo "<table style='width:85%;  position: relative;left: 80px;'>
			<tr>
				<th> Imie </th>
				<th> Nazwisko </th>
				<th> Płeć </th>
				<th> 	</th>
				<th> ID zamówienia </th>
				<th> ID deski </th>
				<th> Rodzaj dostawy </th>
				<th> Wartość zamówienia </th>
				<th> Data zamówienia </th>
			</tr>";

	while ($rekord = $pokaz -> fetch_assoc()) {
		$plec = $rekord['plec'];
		$nazwisko = $rekord['nazwisko'];
		$id_c = $rekord['id_deski'];
		$id_z = $rekord['id_zamowienia'];
		$id_k = $rekord['id_klienta'];
		$imie = $rekord['imie'];
		$dostawa = $rekord['dostawa'];
		$cena = $rekord['cena'];
		$data_utworzenia = $rekord['data_utworzenia'];

	echo "<tr>
		<td> $imie </td>
		<td> $nazwisko </td>
		<td> $plec <td>
		<td hidden>  </td> 
		<td> $id_z </td>
		<td> $id_c </td>
		<td> $dostawa </td>
		<td> $cena zł</td>
		<td> $data_utworzenia </td>
	</tr>";
	}
	
	echo "</table>";
	
	mysqli_close($polaczenie);
?>