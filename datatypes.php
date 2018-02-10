<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-1-2018
 * Time: 11:58
 */
$naam = "Marcel";
$adres = "Adamsweg 64";
$postcode = "7553 KL";
$woonplaats = "Hengelo";
$salaris = 2000;

printf("<br><h2>Salarisspecificatie van $naam: %.2f euro </h2>" , $salaris);

echo <<<MR
<br>Maand: Januari
<br>Jaar: 2018
MR;
