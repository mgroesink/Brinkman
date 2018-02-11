<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-2-2018
 * Time: 17:52
 */

if(!isset($_POST["achternaam"])){
    echo "<h1>Er zijn geen gegevens beschikbaar</h1>";
}
    else {
    echo "<h1>Uw gegevens zijn:</h1>";
        echo "Achternaam: " . htmlspecialchars($_POST["achternaam"]) . "<br>";
        echo "Voornaam: " . $_POST["voornaam"] . "<br>";
        echo "Adres: " . $_POST["adres"] . "<br>";
        echo "Postcode: " . strtoupper($_POST["postcode"]) . "<br>";
        echo "Plaats: " . strtoupper($_POST["plaats"]) . "<br>";
        echo "E-mail: " . strtolower($_POST["email"]) . "<br>";
        echo "<br><hr>";
    }

if(isset($_POST["opleiding"])) {
    if ($_POST["opleiding"] == "ICT")
        echo "<h4 style='color:red'>De ICT opleiding zit vol. Kies a.u.b. een andere opleding.</h4>";
    else
        echo "<h4 style='color:green'>U wordt ingeschreven voor de volgende opleiding: " . $_POST["opleiding"] . "</h4>";
}
?>

