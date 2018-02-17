<!DOCTYPE html>
<html>
<head>
    <title>Kaartspel</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 4-2-2018
 * Time: 14:48
 */

$kleur = ["ruiten", "harten", "klaveren", "schoppen"];
$waarde = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "boer", "vrouw", "heer"];

$kaart = $kleur[array_rand($kleur)] . "_" . $waarde[array_rand($waarde)] . ".svg";
?>

<form>
    <img src="images/kaarten/<?= $kaart ?>"/>
    <br>
    <button>Nieuwe kaart</button>
</form>
</body>
</html>