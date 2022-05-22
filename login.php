<?php
	session_start();
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true ))
    {
        header('Location:index_zalogowany.php');
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
    <div id="centralny">
        <div id="profil">
            <a href="index.php"><img src="img/logo.jpg" class="logo"></a>
                <?php
                if(isset($_SESSION['blad']))
                echo $_SESSION['blad'];
                ?>
        <form action="log.php" method="POST">
            <input placeholder="Login" type="text" name="login"><br><br>
            <input placeholder="Hasło" type="password" name="haslo"><br><br>
            <input id="zatwierdz" type="submit" value="Zaloguj"style="cursor: pointer;">
        </form>
        <div id="nowe">
            LUB
        <a href="zaloz_konto.php"><div id="nowe1">Załóż konto</div></a>
    </div>
    </div>
</div>
</body>
</html>