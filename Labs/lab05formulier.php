<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-2-2018
 * Time: 17:43
 */

?>

<h1>Inschrijfformulier</h1>
<form action="lab05verwerken.php" method="post">
<table>
    <tr>
        <td>Achternaam:</td>
        <td><input type="text" name = "achternaam" required="required"</td>
    </tr>
    <tr>
        <td>Voornaam:</td>
        <td><input type="text" name = "voornaam" required="required"</td>
    </tr>
    <tr>
        <td>Adres:</td>
        <td><input type="text" name = "adres" required</td>
    </tr>
    <tr>
        <td>Postcode:</td>
        <td><input type="text" name = "postcode" required</td>
    </tr>
    <tr>
        <td>Plaats:</td>
        <td><input type="text" name = "plaats" required</td>
    </tr>
    <tr>
        <td>E-mailadres:</td>
        <td><input type="email" name = "email" required="required"</td>
    </tr>
</table>
    <h2>Kies een opleiding</h2>
    <input type="radio" name="opleiding" value="ICT" checked/>ICT<br>
    <input type="radio" name="opleiding" value="Engels"/>Engels<br>
    <input type="radio" name="opleiding" value="Techniek"/>Techniek<br>
    <input type="radio" name="opleiding" value="Nederlands"/>Nederlands<br>
    <br>
    <input type="submit" value="Versturen"/>
    <input type="reset" value="Reset"
</form>