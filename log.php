<?php
	session_start();

	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
	header('Location:index.php');
    exit();
	}

	$login = trim($_REQUEST['login']);
	$haslo = trim($_REQUEST['haslo']);

	@$polaczenie = mysqli_connect ("localhost", "root", "", "projekt_konrad");
	//@$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");
	
	if (mysqli_connect_errno()) {
		echo "Błąd połączenia z serwerem! Spróbuj później!";
	}
	else{
		$query = "select * from klienci where login = '$login' and haslo = '$haslo'";
		//$query_u = "select * from klienci where login = '$login' and haslo = '$haslo' and uprawniania = 'admin'";

			if($login === 'admin' && $haslo === 'admin'){
				if($rezultat = @$polaczenie->query($query)) 
		{
			//$uprawnienia = $rezultat->num_rows;
			//if($uprawnienia>0){
				$_SESSION['admin'] = true;
				$wiersz = $rezultat->fetch_assoc();
				//$_SESSION['id'] = $wiersz['id'];
				$_SESSION['$imie'] = $wiersz['imie'];
				$_SESSION['$uprawnienia'] = $wiersz['uprawnienia'];
				$_SESSION['$login'] = $wiersz['login'];
				
				//$rezultat->free_result();
				//unset($_SESSION['blad']);
				header('Location: index_admin.php');
			//}
			}}
			else if($rezultat = @$polaczenie->query($query))
				{
					$ilu_jest = $rezultat->num_rows;
					if($ilu_jest>0){
						$_SESSION['zalogowany'] = true;
						$wiersz = $rezultat->fetch_assoc();
						$_SESSION['id'] = $wiersz['id'];
						$_SESSION['$imie'] = $wiersz['imie'];
						$_SESSION['$uprawnienia'] = $wiersz['uprawnienia'];
						$_SESSION['$login'] = $wiersz['login'];
						
						$rezultat->free_result();
						unset($_SESSION['blad']);
						header('Location: index_zalogowany.php');
					}
			
			else{
				$_SESSION['blad'] = '<span style="color:red;position: absolute; left:60px;top:120px;font-size:25px;">Podałeś zły login lub hasło</span>';
				header('Location: login.php');
			}}}
			mysqli_close($polaczenie);
?>