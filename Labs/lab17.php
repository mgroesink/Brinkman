<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 17-3-2018
 * Time: 14:45
 */
session_start();

if (!isset($_SESSION["gebruikers"])) {

    $_SESSION["gebruikers"] = array();
}

$gebruikers = $_SESSION["gebruikers"];


if (isset($_POST["submit"])) {
    global $gebruikers;
    array_push($gebruikers,
        array("voornaam" => $_POST["voornaam"], "achternaam" => $_POST["achternaam"], "geboortedatum" => $_POST["geboortedatum"],
            "adres" => $_POST["adres"], "postcode" => $_POST["postcode"], "plaats" => $_POST["plaats"], "email" => $_POST["email"],
            "password" => $_POST["password"], "minderjarig" => $_POST["minderjarig"]));


}
if(count($gebruikers) > 5) $gebruikers = array();
$_SESSION["gebruikers"] = $gebruikers;

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #grad {
            background: linear-gradient(red, lightgreen);
            width: 20%;
            border-radius: 10px;
            padding: 20px;
        }

        .input {
            margin-top: 10px;
            border-radius: 10px;
            padding: 5px;
            width: 80%;
        }

        button {
            background: linear-gradient(red, lightgreen);
            border-radius: 10px;
            padding: 5px;
        }
    </style>

</head>
<body>
<div class="row">
<div id="grad" class="col-md-6">
    <form method="post" action="">
        <input class="input" type="text" name="voornaam" placeholder="Voornaam" value="Marcel"><br>
        <input class="input" type="text" name="achternaam" placeholder="Achternaam" value="Roesink"><br>
        <input class="input" type="date" name="geboortedatum" placeholder="Geboortedatum"  value="1959-01-10"><br>
        <input class="input" type="text" name="adres" placeholder="Adres"  value="Adamsweg 64"><br>
        <input class="input" type="text" name="postcode" placeholder="Postcode"  value="7553 KL"><br>
        <input class="input" type="text" name="plaats" placeholder="Plaats"  value="Hengelo"><br>
        <input class="input" type="email" name="email" placeholder="E-mailadres"  value="mroesink@rocvantwente.nl"><br>
        <input class="input" type="password" name="password" placeholder="Wachtwoord"  value="test"><br>
        Minderjarig: Ja <input type="radio" checked="checked" value="ja" name="minderjarig">
        Nee <input type="radio" value="nee" name="minderjarig">
        <br>
        <button type="submit" name="submit">Aanmelden</button>
        <button type="reset" name="reset">Annuleren</button>
    </form>

</div>
    <div class="col-md-6">
        <?php
        print_r($gebruikers);
        echo "<br>";
        $length = count($gebruikers);
        echo "<h2>There are $length users in the array</h2>";

        ?>

    </div>

</div>

</body>
</html>
