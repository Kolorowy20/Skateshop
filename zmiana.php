<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "projekt_konrad");
    //$polaczenie = mysqli_connect ("localhost", "id17753443_root", "]^BGzdk+4oHb_wTj", "id17753443_projekt_konrad");

    $login = $_POST['s_login'];
    $n_login = $_POST['n_login'];
    $haslo = $_POST['s_haslo'];
    $n_haslo = $_POST['n_login'];
   
    $query = "UPDATE klienci set login = '$n_login', haslo = '$n_haslo' where login = '$login' AND haslo = '$haslo'";
    header('Location:admin_uzytkownicy.php');
    $wynik = mysqli_query($polaczenie, $query);
    
    mysqli_close($polaczenie);
?>