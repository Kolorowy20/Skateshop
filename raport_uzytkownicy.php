<?php 
	$polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
	//@$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	if (mysqli_connect_errno()) {
		echo "Błąd połączenia z serwerem! Spróbuj później!";
	}
	
	$query = "select id_klienta, imie, haslo, login, email, data_utworzenia, uprawnienia from klienci;";

	$pokaz = mysqli_query($polaczenie, $query);
	
	echo "<table style='width:85%;  position: relative;left: 80px;'>
			<tr>
				<th> Numer </th>
				<th> Imie </th>
                <th> Haslo </th>
                <th> Login </th>
				<th> E-mail </th>
				<th> Data utworzenia</th>
				<th> Uprawnienia</th>
			</tr>";

	while ($rekord = $pokaz -> fetch_assoc()) {
		$id_klienta = $rekord['id_klienta'];
        $imie = $rekord['imie'];
        $haslo = $rekord['haslo'];
        $login = $rekord['login'];
		$email = $rekord['email'];
        $data_utworzenia = $rekord['data_utworzenia'];
		$uprawnienia = $rekord['uprawnienia'];

	echo "<tr>
		<td> $id_klienta </td>
		<td> $imie </td>
		<td> $haslo </td>
		<td> $login </td>
		<td> $email </td>
        <td> $data_utworzenia </td>
		<td> $uprawnienia </td>
	</tr>";

	}
	echo "</table>";
	
	mysqli_close($polaczenie);
?>