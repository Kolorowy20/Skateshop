
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
    <div id="centralny">
        <div id="profil">
        <a href="index.php"><img src="img/logo.jpg" class="logo"></a>
        <form method="post" action='zaloz_konto.php'>
            <input type='hidden' name='co' value='dodaj'>
            <input placeholder="Podaj Imię" type="text" name="imie"><br><br>
            <input placeholder="Podaj E-mail" type="email" name="email"><br><br>
            <input placeholder="Podaj Login" type="text" name="login"><br><br>
            <input placeholder="Podaj Hasło" type="password"name="haslo"><br><br>
            <label><input type='checkbox' name='new' value="dziala" checked style="width:20px; position: relative; left:100px;"><span style="position: relative; left:100px;font-size:20px">Newsletter</span></label><br><br>
            <input id="zatwierdz" type="submit" style="cursor: pointer" value="Utwórz konto" name="rejestruj">
        </form>
        <?php

    $polaczenie = mysqli_connect("localhost", "root", "" ,"projekt_konrad");
    //@$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");

	$dzisiaj = date("Y-m-d H:i:s"); 

    if (isset($_POST['co']) && $_POST['co'] == 'dodaj') {
        if (isset($_POST['imie']) && isset($_POST['login']) && isset($_POST['haslo']) && isset($_POST['email'])) {
        //$query = "insert into klienci (imie, haslo, login) values ('".$_POST['imie']."', '".$_POST['haslo']."', '".$_POST['login']."');";
        $query = "insert into klienci (imie, login, haslo, email, data_utworzenia, uprawnienia) values ('".$_POST['imie']."', '".$_POST['login']."', '".$_POST['haslo']."', '".$_POST['email']."', '$dzisiaj', 'klient');";
                    $wynik = mysqli_query($polaczenie, $query);
                    header('Location: login.php');
                    
                    
    }}
    $wynik = mysqli_query($polaczenie, "select * from klienci");
				while ($rekord = $wynik -> fetch_assoc()) {
					$imie=$rekord['imie'];
                    $login=$rekord['login'];
                    $haslo=$rekord['haslo'];
                    //$email=$rekord['email'];
                    //$data_utworzenia=$rekord['data_utworzenia'];
					//$uprawnienia=$rekord['uprawnienia'];
				}
				mysqli_close($polaczenie);
			?>
    </div>
    </div>
</body>
</html>