<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 18-3-2018
 * Time: 14:26
 */
$email = htmlspecialchars($_POST["email"]);
$wachtwoord = htmlspecialchars($_POST["password"]);
echo $email . ": " . $wachtwoord;
$bestand = fopen("gebruikers.txt" , "r");
if(!$bestand){
    echo "Kan het bestand niet openen.";
    header("Location: " . "inloggen.html");
    exit();
}

while(!feof(($bestand))){
    $account = fgets($bestand);
    echo $account;
    $account = explode("*" , $account);
    if(!$account[1] == $email && $account[2] == $wachtwoord){
        // Login gelukt dus sessie starten
        session_start();
        $_SESSION["USER"] = $email;
        $_SESSION["STATUS"] = 1;
        $_SESSION["ID"] = $_COOKIE["PHPSESSID"];
        echo "<script>alert('U bent nuingelogd als $email'.);
        location.href='welkom.php';</script>";
    }
}

//echo "<script>alert('Wachtwoord of gebruikersnaam ongeldig.');
//
//location.href='inloggen.html';</script>";
?>

<!doctype html>
<html class="no-js" lang="en">
<head>

</head>
<body>

</body>
</html>
